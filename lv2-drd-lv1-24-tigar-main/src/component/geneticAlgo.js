import { updateChart } from "./chart.js";
import { getSelectedData, selectedItemsValidation } from "./form.js";
import { displayBestCombination } from "./ui.js";

/**
 * Genetic algorithm implementation
 *
 * @class GA
 */
class GA {

    /**
     * Creates an instance of GA.
     * @param {Object} items phenotype of current optimization problem
     * @param {Number} [populationCap=25] number of max population inside one generation
     * @param {Number} [maxCapacity=400] parameter for current optimization problem - effects fitness function
     * @param {Number} [maxGeneration=100] max number of iterations of evolution process
     * @memberof GA
     */
    constructor(items, populationCap = 25, maxCapacity = 400, maxGeneration = 100) {
        this.items = items;
        this._generation = 0;
        this._population = [];
        this._newPopulation = [];
        this.populationCap = populationCap;
        this.maxCapacity = maxCapacity;
        this.maxGeneration = maxGeneration;
        this.demes = true;
        this.matingPool;
    }

    init() {
        this.InitialPopulation(this.items.length);
        //console.log(this._population);

        while(this._generation<this.maxGeneration){
            this.tournamentSelection();
            this.singlePointCrossover(this.tourBestGene(this.matingPool), this.tourSecondGene(this.matingPool));
            this.mutation(this.tournamentSelection());
            this.MIandALFA();
            
        }
        
        chart.updateChart(this.calculateFitnessValue(), this._generation);
        ui.displayBestCombination(this.MIandALFA(), this.items);

        //console.log(this.tournamentSelection(this.selectRandomGenes()));
        //console.log(this.dynamicSort(this.InitialPopulation.fitness))
        //console.log(this.tourBestGene(this.tournamentSelection()));
        //console.log(this.tourSecondGene(this.tournamentSelection()));
       // console.log(this.singlePointCrossover(this.tourBestGene(this.tournamentSelection()),this.tourSecondGene(this.tournamentSelection())));
       // console.log(this.mutation(this.tourBestGene(this.tournamentSelection())));
       

    }


    /**ENCODING AND GENERATINF INITAL POPULATION*** */

    //generates one gene
    generateChromosome(geneSize) {
        let gene = [];
        for (let i = 0; i < geneSize; i++) {
            gene.push(Math.round(Math.random()));
        }
        return gene;
    }

    //calculating fitness value of one gene
    calculateFitnessValue() {
        let fitness = 0;
        let weight = 0;
        for (let i = 0; i < this.geneSize; i++) {
            fitness += this.items[i].value;
            weight += this.items[i].weight;
        }
        if (weight > 400) {
            fitness = 0;
            return fitness;
        }
        else return fitness;

    }


    //initial the first population and binary representation of itmes
    InitialPopulation(geneSize) {
        for (let i = 0; i < this.populationCap; i++) {
            let gene = this.generateChromosome(geneSize);
            let item = {
                gene: gene,
                generation: this._generation,
            }
            item.fitness = this.calculateFitnessValue(item.gene, this.items);
            this._population.push(item);
        }
    }



    /******* SELECTION********* */

    //for randomly selecting 5 genes from a population, saving it into a mating pool
    tournamentSelection() {
        this.matingPool = [];
        let randomIndexes = [];
        for (let i = 0; i < 2; i++) {
            randomIndexes[i] = Math.floor(Math.random() * this._population.length);
        }
        let j = randomIndexes;
        for (j = 0; j < 2; j++) {

            this.matingPool.push(this._population[j]);
        }

        this.matingPool.sort(function (a, b) { return a.fitness - b.fitness });
        return this.matingPool;
    }

    tourBestGene(matingPool){
        let bestGene = matingPool[1];
        return bestGene;
    }

    tourSecondGene(matingPool){
        let secondGene = matingPool[0];
        return secondGene.gene;
    }


    /**************CROSSOVER*********** */

    singlePointCrossover(bestGene, secondGene) {
        let crossoverIndex = Math.floor(Math.random()*bestGene.length);
        while(crossoverIndex==0 | crossoverIndex==bestGene.length){
            crossoverIndex = Math.floor(Math.random()*bestGene.length);
        }
        console.log(crossoverIndex);
        let crossGene=[];
        let crossGene_2=[];

        for(let i = 0; i<this.items.length; i++) {
            if(i<=crossoverIndex){
                crossGene[i]=bestGene[i];
            }
            else {
                crossGene[i]=secondGene[i];
            };
        }
        for(let i = 0; i<this.items.length; i++) {
            if(i<=crossoverIndex){
                crossGene_2[i]=secondGene[i];

            }
            else {
                crossGene_2[i]=bestGene[i];                
            };
        }
        if(Math.random(1)<0.75){
            return [crossGene,crossGene_2];
        }
        else{
            return [bestGene,secondGene];
        }
    }


    /***************MUTATION************ */

    mutation(gene){
        let chooseChromo = Math.floor(Math.random()*gene.length);
        console.log(chooseChromo);
        
            for(let i=0; i<gene.length;i++){
                if(Math.random(1)<0.1){
                    if(i=chooseChromo){
                        if(gene[i]===0){
                            gene[i]=1;
                        }
                        if(gene[i]===1){
                            gene[i]=0;
                        }
                    }
            }
        }
        let newFitness = this.calculateFitnessValue(gene);
        gene.fitness = newFitness;
        return gene;
    }


    /*********NEW POPULATION************* */

    generateNewPop() {
        for (let i = 0; i < this._population.length/2; i++) {
            let partnerA = this.tournamentSelection();
            let partnerB = this.tournamentSelection();
            let child = this.singlePointCrossover(partnerA, partnerB);
            this.mutation(child);
            this.population[i] = child;
          }
          this._generations++;
    }
    
    MIandALFA(){
        let newPopulation=this.generateNewPop();
        let oldPopulation=this._population;
        let populationArray=[oldPopulation, newPopulation];
        populationArray.sort(function (a, b) { return a.fitness - b.fitness });
        let bestOfBothPop=[];
        for(let i = 0; i < 5; i++) {
            bestOfBothPop[i]=populationArray[i];
        }
        return bestOfBothPop;
    }

}

export { GA };