<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link href="./style.css"  rel="stylesheet">
</head>

<body>
    <header class="container d-flex d-flex--column">
        <h1 class="container__title">ZHEKI.js<span>Fishing AI for real fisherman</span></h1>
        <div class="d-flex align-middle container__logo">
            <svg width="250" viewBox="0 0 631 464" fill="none" aria-label="Logo" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M238.673 458.147C343.427 487.606 394.399 374.557 484.154 383.158C533.286 387.866 631.219 411.728 631 237.903C630.453 125.682 527.016 97.5802 420.351 155.132C388.964 167.407 364.184 163.602 337.278 151.406C310.373 139.21 275.77 84.7639 210.553 73.5628C14.2944 39.8553 -153.631 347.826 238.673 458.147Z"
                    fill="#2BD9F5" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M487.609 176.346C489.574 175.39 493.1 177.243 491.055 180.225C486.525 186.829 504.042 200.02 498.419 188.396C497.818 187.153 494.735 178.558 499.097 182.996C503.46 187.433 509.542 207.042 505.608 213.798C502.156 219.727 493.02 222.548 480.548 222.882L479.987 222.894L479.721 222.91C472.369 223.252 466.794 218.702 463.196 209.841L463.023 209.409C459.38 200.134 460.379 192.699 466.27 187.686C466.377 187.595 466.492 187.513 466.612 187.441L466.798 187.342L487.609 176.346Z"
                    fill="white" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M90.4255 2.76458C89.5679 1.54764 88.1783 0.846858 86.6942 1.02862C85.1744 1.213 83.9035 2.26979 83.4412 3.72784L83.3177 4.11776C83.2243 4.40559 83.1128 4.73522 82.9822 5.10592C82.6093 6.16425 82.1573 7.33893 81.6232 8.60233C80.1049 12.194 78.2361 15.7787 76.0053 19.1136C71.1923 26.3089 65.393 31.3177 58.5949 33.2468C57.5323 33.5483 56.9153 34.6542 57.2169 35.7168C57.3699 36.2562 67.2984 41.2182 77.4339 39.9672C87.2651 38.7538 97.3136 31.3422 97.3946 30.8378L97.5185 29.7875L97.5535 29.4356C98.2575 21.7994 96.921 13.1735 91.7788 4.81755C91.3517 4.12344 90.9007 3.43896 90.4255 2.76458Z"
                    fill="#E7EAEE" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M110.884 4.986L110.832 5.38991C110.119 10.5595 108.124 17.759 104.514 23.1896C100.071 29.8757 93.7996 34.9889 87.4977 38.2842C78.4065 43.0375 68.5107 43.9077 58.767 37.7325L58.3372 37.4558C53.2169 34.1068 49.3313 32.4942 43.9999 33.8249C38.6684 35.1557 36.079 39.0386 33.7776 42.6412L33.6721 42.7936C33.3032 43.2865 32.7635 43.6278 32.1553 43.7479L22.0469 45.349L25.728 49.922C26.8359 51.3082 27.6235 52.3075 28.0906 52.92L32.1366 58.2502C44.1951 74.0653 57.1721 89.1656 82.478 83.9382L83.3357 83.7542C90.0402 82.264 95.6612 86.2666 102.713 92.1659L104.22 93.4347C106.085 95.0133 111.725 99.985 114.033 102.378L114.787 103.17L115.483 103.918C115.628 104.076 115.766 104.228 115.897 104.374L116.617 105.185L117.059 104.663C121.832 98.9165 124.822 90.164 126.37 82.9437C126.954 80.2157 127.29 77.6035 127.43 75.1934L127.447 74.8796C127.483 74.1751 127.499 73.56 127.502 73.0462V72.665L126.781 72.8763C118.435 75.2434 109.044 75.4786 99.881 74.4215C97.6677 74.1662 121.949 54.5 116.965 29.031C115.829 23.2263 115.108 15.4652 113.124 10.1975C112.498 8.53607 111.85 7.01675 111.207 5.65817L110.884 4.986Z"
                    fill="white" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M488.665 179.491L467.891 189.59C462.911 193.827 462.064 200.129 465.35 208.495C466.503 211.431 469.388 218.423 469.388 215.676C469.388 214.819 488.665 202.218 492.364 203.451C495.783 204.591 489.64 194.315 487.918 189.59L488.665 179.233L489.236 178.201"
                    fill="#E7EAEE" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M460.948 187.07C462.329 187.07 454.505 190.749 454.908 197.535C455.311 204.321 460.614 216.828 459.325 217.321C458.035 217.813 455.59 214.167 455.097 212.878C452.03 204.853 451.45 201.578 451.559 196.898C451.703 190.771 454.925 187.07 460.948 187.07Z"
                    fill="#E7EAEE" />
                <ellipse cx="495.762" cy="193.792" rx="5.40016" ry="12.1992" fill="#E7EAEE" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M118.567 322.416C118.567 301.249 120.919 292.045 146.173 280.493C197.933 259.572 197.933 258.766 297.093 220.428C323.317 210.342 378.603 234.503 402.644 224.377C418.671 217.627 433.658 212.614 446.9 205.919C448.182 214.292 456.471 228.468 459.39 230.905C443.884 234.159 428.885 239.192 414.393 246.002C383.064 260.724 401.629 256.712 352.006 303.509C347.8 307.474 332.347 316.516 310.002 325.935C310.002 325.935 265.002 319.892 246.954 312.385C228.586 304.745 200.754 280.493 200.754 280.493C200.754 280.493 168.294 301.67 149.633 311.189C140.898 315.644 118.567 322.416 118.567 322.416Z"
                    fill="white" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M118.567 311.416C118.567 306.447 118.042 302.979 118.567 299.144C120.278 286.64 126.984 280.243 146.311 271.402C198.071 250.481 197.933 247.766 297.093 209.428C323.317 199.342 378.602 223.503 402.643 213.377C418.671 206.627 433.658 201.614 446.9 194.919C446.937 195.159 445.559 206.601 445.559 206.601C445.559 206.601 412.871 223.863 391.248 227.523C368.273 231.412 336.717 213.377 305.208 222.247C257.223 235.755 146.646 278.211 133.565 288.851C123.287 297.211 118.567 311.416 118.567 311.416Z"
                    fill="#E7EAEE" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M90.4255 2.76458C89.5679 1.54764 88.1783 0.846858 86.6942 1.02862C85.1744 1.213 83.9035 2.26979 83.4412 3.72784L83.3177 4.11776C83.2243 4.40559 83.1128 4.73522 82.9822 5.10592C82.6093 6.16425 82.1573 7.33893 81.6232 8.60233C80.1049 12.194 78.2361 15.7787 76.0053 19.1136C71.1923 26.3089 65.393 31.3177 58.5949 33.2468C57.5323 33.5483 56.9153 34.6542 57.2169 35.7168C57.5184 36.7794 74.0356 29.2525 79.3301 21.3376C81.7134 17.7746 83.6968 13.9701 85.3075 10.1598C85.7935 9.01022 86.2164 7.92731 86.5787 6.92798L86.7548 6.43536C86.8967 6.03285 87.0186 5.67193 87.1221 5.35322C87.1482 5.12586 87.1725 5.04979 87.1951 5.125C98.6527 12.9634 94.1486 32.4166 95.2491 32.5111C96.2996 32.6013 97.23 31.8623 97.3946 30.8378L97.5185 29.7875L97.5535 29.4356C98.2575 21.7994 96.921 13.1735 91.7788 4.81755C91.3517 4.12344 90.9007 3.43896 90.4255 2.76458Z"
                    fill="#E7EAEE" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M114.283 2.70588L114.535 3.15649L114.843 3.73492C115.029 4.09095 115.237 4.50405 115.464 4.97055C116.25 6.58749 117.043 8.41727 117.803 10.4353C119.943 16.1154 121.438 22.2457 121.949 28.6325C122.642 37.2994 121.391 45.4789 118.222 52.92L117.951 53.5446C115.377 59.3574 111.627 64.6834 106.759 69.4618L106.276 69.929L106.686 69.9489C113.697 70.2434 120.63 69.6158 126.724 67.6725C128.031 67.256 129.456 67.4711 130.582 68.2541C131.706 69.0358 132.404 70.2937 132.474 71.6605L132.49 72.085L132.5 72.6456V72.8614C132.5 73.644 132.477 74.5212 132.421 75.4825C132.268 78.1377 131.9 81.0018 131.259 83.9917C129.448 92.4385 125.828 100.35 119.911 107.016C119.125 107.901 118.021 108.431 116.846 108.494L116.575 108.5C115.321 108.476 114.175 107.958 113.361 107.073L112.765 106.38L112.473 106.048L111.852 105.358L111.172 104.624C110.935 104.372 110.689 104.114 110.434 103.849C108.262 101.597 105.864 99.3633 103.317 97.3083C96.2586 91.6125 89.4501 88.3967 83.6353 88.7453C74.1235 89.3167 66.2467 88.8724 58.939 86.822C49.4915 84.1714 42.0732 78.9704 37.164 70.691L36.8888 70.219C34.3472 65.7866 30.5934 60.6807 26.1655 55.3662C24.7971 53.7238 23.4474 52.1621 22.1609 50.7177L21.6135 50.106C20.7371 49.131 20.019 48.3541 19.718 48.0377C18.6068 46.8668 18.2206 45.1867 18.7061 43.6504L18.7774 43.4428C19.3107 42.0072 20.551 40.9435 22.0627 40.6451L30.169 39.043L30.2634 38.9064C33.164 34.7835 37.3054 31.2913 42.8066 29.8847C48.5447 28.4174 54.5829 29.6931 60.6638 33.5516L61.0881 33.8249C69.3009 39.1964 77.4415 38.9 85.1811 34.8533C90.7094 31.9625 95.9786 27.0541 99.9713 21.0465C103.684 15.461 105.89 9.48993 106.048 4.77713C106.113 2.80761 107.472 1.11656 109.382 0.63435C111.294 0.150978 113.294 0.997729 114.283 2.70588ZM110.884 4.986L110.832 5.3899C110.12 10.5595 108.124 17.759 104.515 23.1896C100.071 29.8757 93.7997 34.9889 87.4979 38.2842C78.4066 43.0375 68.5108 43.9077 58.7671 37.7325L58.3374 37.4558C53.217 34.1068 49.3314 32.4942 44 33.8249C38.6686 35.1557 36.0791 39.0386 33.7777 42.6412L33.6722 42.7936C33.3033 43.2865 32.7637 43.6278 32.1554 43.7479L22.047 45.349L25.7281 49.922C26.8361 51.3082 27.6236 52.3075 28.0907 52.92L32.1368 58.2502C44.1952 74.0653 57.1722 89.1656 82.4781 83.9382L83.3358 83.7542C90.0403 82.264 95.6613 86.2666 102.713 92.1659L104.22 93.4347C106.085 95.0133 111.725 99.985 114.033 102.378L114.787 103.17L115.483 103.918C115.628 104.076 115.766 104.228 115.898 104.374L116.617 105.185L117.059 104.663C121.832 98.9165 124.822 90.164 126.37 82.9437C126.955 80.2157 127.29 77.6035 127.43 75.1934L127.447 74.8796C127.483 74.1751 127.499 73.56 127.502 73.0462V72.665L126.781 72.8763C118.435 75.2434 109.044 75.4786 99.8812 74.4215C97.6678 74.1662 121.949 54.5 116.965 29.031C115.829 23.2263 115.108 15.4652 113.124 10.1975C112.499 8.53607 111.85 7.01675 111.207 5.65817L110.884 4.986Z"
                    fill="#E7EAEE" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M47.5 50C49.4299 50 51 48.4299 51 46.5C51 44.5701 49.4299 43 47.5 43C45.5701 43 44 44.5701 44 46.5C44 48.4297 45.5701 50 47.5 50Z"
                    fill="#00160A" />
                <ellipse cx="50.5" cy="59.5" rx="5.5" ry="4.5" fill="#FFB61D" />
                <ellipse cx="50.5" cy="59.5" rx="5.5" ry="4.5" fill="#FFB61D" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M114.283 2.70588L114.535 3.15649L114.843 3.73492C115.029 4.09095 115.237 4.50405 115.464 4.97055C116.25 6.58749 117.044 8.41727 117.804 10.4353C119.943 16.1154 121.439 22.2457 121.949 28.6325C122.642 37.2994 121.391 45.4789 118.223 52.92L117.951 53.5446C115.377 59.3574 111.627 64.6834 106.759 69.4618L106.276 69.929L106.686 69.9489C113.697 70.2434 120.63 69.6158 126.724 67.6725C128.031 67.256 129.456 67.4711 130.582 68.2541C131.706 69.0358 132.404 70.2937 132.474 71.6605L132.49 72.085L132.5 72.6456V72.8614C132.5 73.644 132.477 74.5212 132.421 75.4825C132.268 78.1377 131.9 81.0018 131.259 83.9917C129.448 92.4385 125.828 100.35 119.911 107.016C119.126 107.901 118.021 108.431 116.846 108.494L116.575 108.5C115.321 108.476 114.175 107.958 113.361 107.073L112.765 106.38L112.473 106.048L111.852 105.358L111.172 104.624C110.935 104.372 110.689 104.114 110.434 103.849C108.262 101.597 105.864 99.3633 103.317 97.3083C96.2587 91.6125 89.4502 88.3967 83.6354 88.7453C74.1236 89.3167 66.2468 88.8724 58.9391 86.822C49.4917 84.1714 42.0733 78.9704 37.1641 70.691L36.8889 70.219C34.3473 65.7866 30.5935 60.6807 26.1656 55.3662C24.7972 53.7238 23.4475 52.1621 22.161 50.7177L21.6136 50.106C20.7372 49.131 20.0191 48.3541 19.7181 48.0377C18.6069 46.8668 18.2207 45.1867 18.7062 43.6504L18.7775 43.4428C19.3108 42.0072 20.5511 40.9435 22.0628 40.6451L30.1691 39.043L30.2636 38.9064C33.1641 34.7835 37.3055 31.2913 42.8067 29.8847C48.2217 28.5001 53.904 29.5582 59.6372 32.9244C65.9877 30.796 71.4402 25.9384 76.0054 19.1136C78.2361 15.7787 80.105 12.194 81.6233 8.60233C82.1573 7.33893 82.6093 6.16425 82.9823 5.10592C83.1129 4.73522 83.2243 4.40559 83.3178 4.11776L83.4413 3.72784C83.9036 2.26978 85.1745 1.213 86.6943 1.02862C88.1784 0.846857 89.568 1.54764 90.4256 2.76458C90.9008 3.43895 91.3518 4.12344 91.7789 4.81754C95.7704 11.3038 97.4689 17.9527 97.6998 24.175C98.4944 23.1713 99.2535 22.1267 99.9714 21.0465C103.684 15.461 105.89 9.48993 106.048 4.77713C106.113 2.80761 107.472 1.11656 109.382 0.63435C111.295 0.150978 113.294 0.997729 114.283 2.70588ZM85.1812 34.8533C77.6633 38.784 69.7671 39.1763 61.7939 34.2727C67.1623 31.7906 75.7755 26.6515 79.3301 21.3376C81.7135 17.7746 83.6969 13.9701 85.3076 10.1598C85.7935 9.01022 86.2165 7.92731 86.5788 6.92798L86.7549 6.43536C86.8967 6.03284 87.0187 5.67193 87.1222 5.35322C87.1483 5.12586 87.1726 5.04979 87.1951 5.125C94.8112 10.3353 95.3746 20.6776 95.2195 27.0549C92.158 30.3214 88.7228 33.0014 85.1812 34.8533ZM87.498 38.2842C90.5488 36.6889 93.5924 34.6676 96.4249 32.248C96.6428 32.1212 96.8353 31.9541 96.9917 31.756C99.7911 29.2866 102.366 26.4219 104.515 23.1896C108.124 17.759 110.12 10.5595 110.832 5.3899L110.884 4.986L111.208 5.65817C111.85 7.01675 112.499 8.53607 113.124 10.1975C114.505 13.8634 115.274 18.7369 115.997 23.3181L115.997 23.3182L115.997 23.3185C116.313 25.3201 116.62 27.266 116.965 29.031C120.785 48.5519 107.413 64.6638 101.956 71.2398C100.293 73.2435 99.3644 74.3619 99.8813 74.4215C109.044 75.4786 118.435 75.2434 126.781 72.8763L127.502 72.665V73.0462C127.5 73.56 127.483 74.1751 127.447 74.8796L127.43 75.1934C127.29 77.6035 126.955 80.2157 126.37 82.9437C124.822 90.164 121.833 98.9165 117.059 104.663L116.617 105.185L115.898 104.374C115.767 104.228 115.628 104.076 115.483 103.918L114.787 103.17L114.033 102.378C111.725 99.985 106.085 95.0133 104.22 93.4347L102.713 92.1659C95.6615 86.2666 90.0404 82.264 83.3359 83.7542L82.4782 83.9382C57.1723 89.1656 44.1954 74.0653 32.1369 58.2502L28.0908 52.92C27.6237 52.3075 26.8362 51.3082 25.7283 49.922L22.0471 45.349L32.1555 43.7479C32.7638 43.6278 33.3034 43.2865 33.6723 42.7936L33.7778 42.6412C36.0793 39.0386 38.6687 35.1557 44.0001 33.8249C49.3316 32.4942 53.2171 34.1068 58.3375 37.4558L58.7673 37.7325C68.5109 43.9077 78.4067 43.0375 87.498 38.2842ZM487.609 176.346C489.574 175.39 493.1 177.243 491.055 180.225C487.958 184.74 491.399 195.224 493.494 201.61L493.494 201.61L493.494 201.611L493.495 201.611L493.495 201.612C494.464 204.565 495.145 206.641 494.758 206.843C493.534 207.483 492.024 207.009 491.384 205.786C487.921 199.159 485.933 193.897 485.437 189.898C485.19 187.907 485.135 185.982 485.275 184.125L485.293 183.91L469.283 191.692L469.081 191.878C465.467 195.269 463.877 199.205 466.521 206.177L466.677 206.581C469.549 213.891 474.409 219.135 479.465 218.917L479.861 218.896C491.097 218.671 497.813 215.289 500.21 211.172C503.225 205.995 504.043 200.02 498.42 188.396C497.818 187.153 494.735 178.558 499.097 182.996C503.46 187.433 509.542 207.042 505.608 213.798C502.324 219.438 493.897 222.265 482.348 222.815C482.416 223.109 482.431 223.42 482.384 223.737C481.29 231.161 477.902 235.831 472.235 237.182C467.902 238.215 463.245 236.846 458.979 233.548C443.992 236.767 429.485 241.672 415.456 248.264L413.378 249.249C406.221 252.668 402.116 254.959 399.119 257.187C397.361 258.494 395.909 259.832 394.348 261.555L394.096 261.841C393.339 262.719 391.689 264.735 389.811 267.028L389.807 267.033L389.805 267.036L389.805 267.036L389.803 267.038L389.797 267.046L389.794 267.049C387.296 270.101 384.399 273.639 382.669 275.641L381.833 276.604C374.792 284.672 365.918 293.825 353.721 305.327L353.379 305.641C348.806 309.727 336.654 316.636 321.5 323.603C363.322 322.117 393.478 306.154 412.258 275.688C413.084 274.348 414.929 274.096 416.085 275.166C448.378 305.074 485.795 318.915 528.481 316.753C571.281 314.586 602.688 303.462 622.801 283.491C623.781 282.518 625.364 282.523 626.336 283.503C627.309 284.483 627.304 286.066 626.324 287.039C605.225 307.99 560.43 323.711 516.501 325.935C473.78 328.098 448.29 310.495 415.697 281.563L414.9 280.851L414.615 281.29C393.973 312.573 349.125 335.389 304.37 335.712L302.968 335.717C257.19 335.717 230.789 313.552 199.905 283.256L199.664 283.018L199.554 283.113L198.747 283.791L197.574 284.778L196.856 285.382C167.917 309.736 146.324 327.907 113.843 332.55L112.807 332.694C76.1829 340.104 20.6388 320.367 12.1033 310.692C4.28254 301.828 13.4047 307.338 15.909 308.85L15.9091 308.85C16.1379 308.989 16.3115 309.093 16.4118 309.151C40.6517 323.029 68.5996 328.314 102.131 323.74C106.759 323.109 111.357 322.273 115.926 321.233L115.873 320.741C114.409 306.835 114.401 300.758 116.51 293.782C119.38 284.293 126.346 277.084 138.878 271.351L142.329 269.826C157.809 263.003 170.103 257.881 182.855 252.905L183.789 252.541C185.219 251.985 186.668 251.425 188.147 250.857L189.596 250.305C190.119 250.12 196.934 247.418 207.297 243.31L207.3 243.308L207.327 243.298L207.332 243.296L207.335 243.295C231.287 233.799 274.144 216.809 302.103 205.999C308.15 203.673 315.474 202.9 324.455 203.364L325.229 203.406C331.958 203.802 338.576 204.716 349.426 206.593L358.958 208.262C369.603 210.105 374.76 210.831 380.782 211.26C382.675 211.395 384.475 211.563 386.184 211.721L386.185 211.721C392.517 212.31 397.613 212.784 401.673 211.073C405.285 209.552 408.825 208.084 412.294 206.645L412.295 206.644C423.642 201.938 434.226 197.547 444.048 192.665C444.722 188.297 446.443 185.072 449.14 182.948C453.301 179.672 459.19 179.617 464.297 181.603C465.584 182.103 466.221 183.552 465.721 184.839C465.559 185.255 464.519 185.064 463.047 184.792C459.969 184.225 455.004 183.309 452.234 186.876C449.151 190.844 448.128 196.923 450.857 208.893C452.835 217.568 465.659 232.318 471.075 232.318C477.114 232.318 478.526 226.456 479.327 223.131L479.378 222.923C472.196 223.109 466.738 218.564 463.196 209.841L463.024 209.409C459.381 200.134 460.38 192.699 466.271 187.686C466.378 187.595 466.492 187.513 466.613 187.441L466.798 187.342L487.609 176.346ZM454.366 229.029C454.113 228.723 453.863 228.409 453.616 228.088C453.522 227.987 453.432 227.887 453.354 227.793C453.127 227.516 452.893 227.235 452.655 226.949C450.717 224.621 448.472 221.925 446.714 218.036L446.459 217.469C443.639 211.152 443.303 204.057 443.476 198.206L443.502 197.526L443.353 197.602C431.702 203.368 419.028 209.153 405.331 214.956L403.614 215.681C397.75 218.151 390.425 219.896 381.145 219.297L380.427 219.248C374.087 218.796 368.753 218.038 357.57 216.096L349.221 214.633C325.685 210.558 313.907 209.922 304.201 213.551C304.201 213.551 159.468 267.995 140.932 275.91C129.658 281.067 125.833 285.919 121.171 293.782C118.76 297.849 119.003 309.067 119.173 316.859L119.173 316.861C119.201 318.168 119.228 319.378 119.239 320.442C146.606 313.597 172.912 299.369 198.174 277.726C199.17 276.872 200.656 276.934 201.578 277.866C203.622 279.932 205.7 281.929 207.812 283.855L312.036 240.311C312.322 240.192 312.617 240.13 312.909 240.119C313.695 239.749 314.541 239.442 315.45 239.201C324.538 236.785 331.795 240.715 336.81 250.391L345.894 243.765C347.234 242.787 349.137 243.361 349.712 244.917C358.003 267.322 355.587 282.674 341.936 290.081C328.169 297.551 316.197 291.392 306.864 272.721C306.39 271.773 306.576 270.679 307.231 269.941C305.006 260.902 304.593 253.7 306.107 248.485L214.793 289.866C228.447 300.951 243.441 309.312 259.784 314.951C260.158 314.594 260.562 314.286 260.96 314.068C274.726 306.528 308.642 297.719 317.02 295.544C317.745 295.355 318.279 295.217 318.592 295.133C322.522 294.08 318.495 297.753 317.309 298.3L317.157 298.364L267.655 317.427C282.381 321.621 298.149 323.717 314.968 323.717C315.924 323.717 316.874 323.71 317.819 323.696L318.927 322.976L318.928 322.975L318.928 322.975L318.93 322.974C329.517 316.093 347.217 304.588 350.29 301.69L351.724 300.334C361.916 290.444 369.502 280.956 376.123 272.675C383.387 263.588 389.491 255.953 396.604 250.832C402.135 246.85 404.139 245.94 408.849 243.802C410.109 243.229 411.563 242.57 413.33 241.739C425.824 235.868 440.012 232.468 453.331 229.277L454.366 229.029ZM316.734 244.033C323.936 242.118 329.329 245.5 333.44 254.944L322.818 263.365L322.808 263.369L311.832 267.699L311.558 266.495C308.552 252.871 310.511 245.688 316.734 244.033ZM333.44 254.944L322.827 263.361C323.04 263.277 323.259 263.224 323.478 263.201C323.679 263.179 323.88 263.183 324.077 263.209C324.543 263.272 324.985 263.465 325.349 263.77C325.588 263.97 325.792 264.216 325.946 264.503C328.451 269.013 330.388 270.088 332.354 268.985C334.436 267.818 335.09 263.429 333.569 255.588L333.44 254.944ZM195.739 357.594C196.9 356.847 204.914 352.937 197.777 360.286C190.64 367.636 135.056 398.816 105.052 400.543C76.1331 402.207 50.4568 390.129 28.1176 374.322L27.3773 373.794L27.2297 373.985C26.2407 375.239 25.2246 376.376 24.1804 377.398L23.7312 377.828C21.839 379.605 18.5641 381.615 13.8324 383.952C12.5945 384.564 8.22035 385.126 10.4838 382.818C12.7473 380.51 17.7013 377.186 20.5864 375.281C22.4719 374.036 23.0674 372.579 23.6582 371.134C23.9714 370.368 24.2833 369.605 24.7854 368.879C25.5919 367.712 27.2063 367.449 28.3413 368.3C50.3638 384.806 76.09 393.604 105.052 391.938C134.134 390.264 164.168 377.907 195.739 357.594ZM366.787 373.534C367.802 372.598 367.802 365.918 366.787 366.854C355.554 377.219 332.037 386.335 303.018 388.005C273.962 389.678 251.118 385.109 234.441 374.386C233.28 373.639 227.532 371.664 230.986 375.136C234.441 378.609 273.275 396.725 303.305 394.997L304.205 394.944C333.794 393.138 354.655 384.728 366.787 373.534ZM346.276 250.233L346.125 249.783L338.598 255.275L338.737 256.052C340.25 264.904 339.218 270.691 335.02 273.218L334.8 273.346C330.424 275.8 326.305 274.067 322.862 269.025L322.71 268.8L312.589 272.888L312.823 273.313C320.56 287.274 329.134 291.157 339.225 285.861L339.551 285.687C349.686 280.187 352.182 268.964 346.626 251.321L346.276 250.233ZM51.0001 46.5C51.0001 48.4299 49.4301 50 47.5001 50C45.5702 50 44.0001 48.4297 44.0001 46.5C44.0001 44.5701 45.5702 43 47.5001 43C49.4301 43 51.0001 44.5701 51.0001 46.5Z"
                    fill="#00160A" />
            </svg>
        </div>
    </header>
    <main>
        <div class="container d-flex align-middle">
            <form action="" method="post" id="form-submit">
                <legend>Select stuff you wish to take on fishing: <br> - Golf trunk size: 400 capacity</legend>
                <fieldset>
                    <p class="d-flex">
                        <input checked type="checkbox" name="input-1"
                            value='{ "name": "map", "weight": 9, "value": 150 }'>
                        <label for="input-1">Map - Weight: 9, Value: 150</label><br>
                    </p>
                    <p class="d-flex">
                        <input checked type="checkbox" name="input-2"
                            value='{ "name": "compass", "weight": 13, "value": 35 }'>
                        <label for="input-2">Compass - Weight: 13, Value: 35</label><br>
                    </p>
                    <p class="d-flex">
                        <input checked type="checkbox" name="input-3"
                            value='{ "name": "wather", "weight": 153, "value": 200 }'>
                        <label for="input-3">Water - Weight: 153, Value: 200</label><br>
                    </p>
                    <p class="d-flex">
                        <input checked type="checkbox" name="input-4"
                            value='{ "name": "sandwitch", "weight": 50, "value": 60 }'>
                        <label for="input-4">Sandwitch - Weight: 50, Value: 60</label><br>
                    </p>
                    <p class="d-flex">
                        <input checked type="checkbox" name="input-5"
                            value='{ "name": "Flurocarbon", "weight": 15, "value": 60 }'>
                        <label for="input-5">Flurocarbon - Weight: 15, Value: 60</label><br>
                    </p>
                    <p class="d-flex">
                        <input checked type="checkbox" name="input-6"
                            value='{ "name": "banana", "weight": 27, "value": 45 }'>
                        <label for="input-6">Banana - Weight: 27, Value: 45</label><br>
                    </p>
                    <p class="d-flex">
                        <input checked type="checkbox" name="input-7"
                            value='{ "name": "apple", "weight": 39, "value": 40 }'>
                        <label for="input-7">Apple - Weight: 39, Value: 40</label><br>
                    </p>
                    <p class="d-flex">
                        <input checked type="checkbox" name="input-8"
                            value='{ "name": "beer", "weight": 52, "value": 10 }'>
                        <label for="input-8">Beer - Weight: 52, Value: 10</label><br>
                    </p>
                    <p class="d-flex">
                        <input checked type="checkbox" name="input-9"
                            value='{ "name": "suntan cream", "weight": 11, "value": 70 }'>
                        <label for="input-9">Suntan cream - Weight: 11, Value: 70</label><br>
                    </p>
                    <p class="d-flex">
                        <input checked type="checkbox" name="input-10"
                            value='{ "name": "sonar", "weight": 32, "value": 50 }'>
                        <label for="input-10">Sonar- Weight: 32, Value: 50</label><br>
                    </p>
                    <p class="d-flex">
                        <input checked type="checkbox" name="input-11"
                            value='{ "name": "throusers", "weight": 48, "value": 10 }'>
                        <label for="input-11">Throusers- Weight: 48, Value: 10</label><br>
                    </p>
                    <p class="d-flex">
                        <input checked type="checkbox" name="input-12"
                            value='{ "name": "umbrella", "weight": 73, "value": 40 }'>
                        <label for="input-12">Umbrella- Weight: 73, Value: 40</label><br>
                    </p>
                    <p class="d-flex">
                        <input checked type="checkbox" name="input-13"
                            value='{ "name": "waterproof  throusers", "weight": 42, "value": 70 }'>
                        <label for="input-13">Waterproof throusers- Weight: 42, Value: 70</label><br>
                    </p>
                    <p class="d-flex">
                        <input checked type="checkbox" name="input-14"
                            value='{ "name": "waterproof  overclothes", "weight": 43, "value": 75 }'>
                        <label for="input-14">Waterproof overclothes- Weight: 43, Value: 75</label><br>
                    </p>
                    <p class="d-flex">
                        <input checked type="checkbox" name="input-15"
                            value='{ "name": "sunglasses", "weight": 7, "value": 20 }'>
                        <label for="input-15">Sunglasses- Weight: 7, Value: 20</label><br>
                    </p>
                    <p class="d-flex">
                        <input checked type="checkbox" name="input-16"
                            value='{ "name": "shimano catana cx 270", "weight": 25, "value": 100 }'>
                        <label for="input-16">Shimano catana cx270- Weight: 25, Value: 100</label><br>
                    </p>
                    <p class="d-flex">
                        <input checked type="checkbox" name="input-17"
                            value='{ "name": "towel", "weight": 18, "value": 12 }'>
                        <label for="input-17">Towel- Weight: 10, Value: 12</label><br>
                    </p>
                    <p class="d-flex">
                        <input checked type="checkbox" name="input-18"
                            value='{ "name": "Daiwa Ninja 2500", "weight": 35, "value": 100 }'>
                        <label for="input-18">Daiwa Ninja 2500- Weight: 35, Value: 100</label><br>
                    </p>
                    <p class="d-flex">
                        <input checked type="checkbox" name="input-19"
                            value='{ "name": "fishing bait", "weight": 50, "value": 80 }'>
                        <label for="input-19">Fishing bait- Weight: 50, Value: 80</label><br>
                    </p>
                    <p class="d-flex">
                        <input checked type="checkbox" name="input-20"
                            value='{ "name": "small boat", "weight": 250, "value": 250 }'>
                        <label for="input-20">Small boat- Weight: 250, Value: 250</label><br>
                    </p>
                </fieldset>
                <button type="submit" class="btn btn-default">Analyze</button>
            </form>
            <div class="graph">
                <canvas id="chart" width="400" height="400"></canvas>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js" defer></script>
    <script type="module" src="./src/main.js" defer></script>
</body>

</html>
