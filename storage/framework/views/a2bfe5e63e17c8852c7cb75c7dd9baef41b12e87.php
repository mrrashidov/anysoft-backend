<?php echo e(\Filament\Facades\Filament::renderHook('footer.before')); ?>


<div class="filament-footer flex items-center justify-center">
    <?php echo e(\Filament\Facades\Filament::renderHook('footer.start')); ?>


    <?php if(config('filament.layout.footer.should_show_logo')): ?>
        <a
            href="https://filamentphp.com"
            target="_blank"
            rel="noopener noreferrer"
            class="text-gray-300 hover:text-primary-500 transition"
        >
            <svg role="img" aria-label="Filament" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 303 61" class="fill-current w-24">
                <path d="M11.739,58.266 C12.337,55.484 12.909,52.793 13.455,50.193 C13.91,48.0263333 14.4191667,45.6249444 14.9825,42.9888333 L15.327,41.379 L18.1126496,28.119 L28.782,28.119 L30.654,19.344 L19.5,19.344 C19.578,18.954 19.695,18.3755 19.851,17.6085 C20.007,16.8415 20.137,16.198 20.241,15.678 C20.657,13.676 21.411,12.1745 22.503,11.1735 C23.595,10.1725 25.103,9.672 27.027,9.672 C28.119,9.672 29.198,9.802 30.264,10.062 C31.33,10.322 32.344,10.686 33.306,11.154 L36.114,1.794 C35.282,1.43 34.3135,1.1115 33.2085,0.8385 C32.1035,0.5655 30.94,0.3575 29.718,0.2145 C28.496,0.0715 27.274,-1.42108547e-14 26.052,-1.42108547e-14 C24.128,-1.42108547e-14 22.282,0.2275 20.514,0.6825 C18.746,1.1375 17.134,1.9045 15.678,2.9835 C14.222,4.0625 12.9545,5.525 11.8755,7.371 C10.7965,9.217 9.971,11.518 9.399,14.274 C9.035,16.016 8.6385,17.9075 8.2095,19.9485 L8.33664956,19.344 L1.872,19.344 L1.77635684e-14,28.119 L6.47364956,28.119 L6.37884,28.56594 C6.2062,29.3761 6.03564,30.17794 5.86716,30.97146 L5.616,32.1555 C5.2,34.1185 4.823,35.906 4.485,37.518 L3.666,41.418 C2.99,44.642 2.3725,47.5605 1.8135,50.1735 C1.2545,52.7865 0.689,55.484 0.117,58.266 L11.739,58.266 Z"></path>
                <path d="M11.739 58.266C12.337 55.484 12.909 52.793 13.455 50.193 13.91 48.0263333 14.4191667 45.6249444 14.9825 42.9888333L15.327 41.379 18.1126496 28.119 28.782 28.119 30.654 19.344 19.5 19.344C19.578 18.954 19.695 18.3755 19.851 17.6085 20.007 16.8415 20.137 16.198 20.241 15.678 20.657 13.676 21.411 12.1745 22.503 11.1735 23.595 10.1725 25.103 9.672 27.027 9.672 28.119 9.672 29.198 9.802 30.264 10.062 31.33 10.322 32.344 10.686 33.306 11.154L36.114 1.794C35.282 1.43 34.3135 1.1115 33.2085.8385 32.1035.5655 30.94.3575 29.718.2145 28.496.0715 27.274-1.42108547e-14 26.052-1.42108547e-14 24.128-1.42108547e-14 22.282.2275 20.514.6825 18.746 1.1375 17.134 1.9045 15.678 2.9835 14.222 4.0625 12.9545 5.525 11.8755 7.371 10.7965 9.217 9.971 11.518 9.399 14.274 9.035 16.016 8.6385 17.9075 8.2095 19.9485L8.33664956 19.344 1.872 19.344 1.77635684e-14 28.119 6.47364956 28.119 6.37884 28.56594C6.2062 29.3761 6.03564 30.17794 5.86716 30.97146L5.616 32.1555C5.2 34.1185 4.823 35.906 4.485 37.518L3.666 41.418C2.99 44.642 2.3725 47.5605 1.8135 50.1735 1.2545 52.7865.689 55.484.117 58.266L11.739 58.266zM62.3193768 58.266C62.8913768 55.484 63.4503768 52.793 63.9963768 50.193 64.5423768 47.593 65.1663768 44.655 65.8683768 41.379L70.4313768 19.773C71.1853768 16.185 71.9068768 12.7725 72.5958768 9.5355 73.2848768 6.2985 73.9543768 3.146 74.6043768.078L62.7483768 1.092C62.0983768 4.212 61.4483768 7.319 60.7983768 10.413 60.1483768 13.507 59.4723768 16.64 58.7703768 19.812L54.2463768 41.418C53.5443768 44.642 52.9203768 47.5605 52.3743768 50.1735 51.8283768 52.7865 51.2563768 55.484 50.6583768 58.266L62.3193768 58.266z"></path>
                <path d="M38.7656433,19.4978519 L38.0777659,22.021842 L38.0610693,22.131033 C38.0251643,22.4950191 38.1846143,22.8536527 38.4749965,23.0415561 L42.5405456,25.6727365 L37.8469335,26.0597897 C37.4781717,26.0902123 37.1701788,26.3833635 37.0869964,26.7831066 L36.7567399,28.3701948 L36.7400433,28.4793858 C36.7041382,28.8433719 36.8635882,29.2020055 37.1539704,29.3899089 L41.2194156,32.0208772 L36.5259074,32.4081426 C36.1571456,32.4385651 35.8491527,32.7317163 35.7659703,33.1314594 L35.4357138,34.7185476 L35.4190172,34.8277387 C35.3831121,35.1917248 35.5425621,35.5503584 35.8329443,35.7382617 L39.8982856,38.3690178 L35.2048813,38.7564954 C34.8361195,38.7869179 34.5281266,39.0800691 34.4449442,39.4798122 L34.1146877,41.0669004 L34.0979911,41.1760915 C34.062086,41.5400776 34.221536,41.8987112 34.5119182,42.0866145 L38.5771556,44.7171584 L33.8838552,45.1048482 C33.5150934,45.1352707 33.2071005,45.4284219 33.1239181,45.8281651 L32.7936616,47.4152533 L32.776965,47.5244443 C32.7410599,47.8884304 32.90051,48.247064 33.1908921,48.4349674 L37.2568698,51.0652991 L32.5628291,51.453201 C32.1940673,51.4836235 31.8860744,51.7767748 31.802892,52.1765179 L30.2847167,58.4347902 L35.5467639,58.3429377 L36.3076904,54.9378526 L42.8887216,54.2623324 C43.2574834,54.2319099 43.5654763,53.9387586 43.6486587,53.5390155 L43.9789152,51.9519273 L43.9956118,51.8427363 C44.0315169,51.4787502 43.8720669,51.1201166 43.5816847,50.9322132 L39.5158755,48.3005143 L44.2097477,47.9139796 C44.5785095,47.883557 44.8865024,47.5904058 44.9696848,47.1906627 L45.2999413,45.6035745 L45.3166379,45.4943835 C45.352543,45.1303974 45.193093,44.7717638 44.9027108,44.5838604 L40.8370055,41.9523737 L45.5307738,41.5656268 C45.8995356,41.5352042 46.2075285,41.242053 46.2907109,40.8423099 L46.6209674,39.2552217 L46.637664,39.1460307 C46.6735691,38.7820446 46.5141191,38.423411 46.2237369,38.2355076 L42.1572913,35.604233 L46.8517999,35.217274 C47.2205617,35.1868514 47.5285546,34.8937002 47.611737,34.4939571 L47.9419935,32.9068689 L47.9586901,32.7976779 C47.9945952,32.4336918 47.8351451,32.0750582 47.544763,31.8871548 L43.4784213,29.2551558 L48.172826,28.8689211 C48.5415878,28.8384986 48.8495807,28.5453474 48.9327631,28.1456043 L49.2630196,26.5585161 L49.2797162,26.449325 C49.3156213,26.0853389 49.1561712,25.7267053 48.8657891,25.538802 L43.4784213,22.021842 L44.5654245,19.1812071 L38.7656433,19.4978519 Z" transform="rotate(1 39.785 38.808)"></path>
                <path d="M46.3029925 13.338C48.4869925 13.338 50.3134925 12.9415 51.7824925 12.1485 53.2514925 11.3555 54.2199925 9.828 54.6879925 7.566 55.1039925 5.59 54.7919925 3.8935 53.7519925 2.4765 52.7119925 1.0595 51.1129925.351 48.9549925.351 46.7969925.351 44.9704925.806 43.4754925 1.716 41.9804925 2.626 41.0119925 4.121 40.5699925 6.201 40.1019925 8.489 40.4074925 10.2505 41.4864925 11.4855 42.5654925 12.7205 44.1709925 13.338 46.3029925 13.338zM94.7512855 18.291C98.4952855 18.291 101.576286 18.915 103.994286 20.163 106.412286 21.411 108.089286 23.1855 109.025286 25.4865 109.961286 27.7875 110.078286 30.524 109.376286 33.696 109.116286 34.996 108.843286 36.3155 108.557286 37.6545 108.271286 38.9935 107.972286 40.391 107.660286 41.847L107.660286 41.847 106.958286 45.123C106.542286 47.073 106.106786 49.127 105.651786 51.285 105.196786 53.443 104.696286 55.77 104.150286 58.266L104.150286 58.266 94.0882855 58.266 94.5952855 53.079 93.6982855 53.079C92.7362855 54.457 91.6767855 55.5945 90.5197855 56.4915 89.3627855 57.3885 88.1082855 58.0645 86.7562855 58.5195 85.4042855 58.9745 83.9482855 59.202 82.3882855 59.202 79.9182855 59.202 77.8512855 58.5975 76.1872855 57.3885 74.5232855 56.1795 73.3662855 54.574 72.7162855 52.572 72.0662855 50.57 72.0012855 48.386 72.5212855 46.02 72.9112855 44.2 73.5417855 42.679 74.4127855 41.457 75.2837855 40.235 76.3367855 39.234 77.5717855 38.454 78.8067855 37.674 80.1717855 37.0565 81.6667855 36.6015 83.1617855 36.1465 84.7152855 35.802 86.3272855 35.568L86.3272855 35.568 98.5342855 33.657C98.7942855 32.487 98.6967855 31.4665 98.2417855 30.5955 97.7867855 29.7245 96.9742855 29.0485 95.8042855 28.5675 94.6342855 28.0865 93.1392855 27.846 91.3192855 27.846 90.3832855 27.846 89.3887855 27.9175 88.3357855 28.0605 87.2827855 28.2035 86.1842855 28.4115 85.0402855 28.6845 83.8962855 28.9575 82.7197855 29.2955 81.5107855 29.6985 80.3017855 30.1015 79.0602855 30.576 77.7862855 31.122L77.7862855 31.122 79.6192855 20.904C80.5552855 20.592 81.6212855 20.2865 82.8172855 19.9875 84.0132855 19.6885 85.2742855 19.409 86.6002855 19.149 87.9262855 18.889 89.2847855 18.681 90.6757855 18.525 92.0667855 18.369 93.4252855 18.291 94.7512855 18.291zM97.0912855 38.922C96.7272855 39.182 96.2852855 39.4355 95.7652855 39.6825 95.2452855 39.9295 94.5302855 40.1765 93.6202855 40.4235 92.7102855 40.6705 91.4752855 40.963 89.9152855 41.301 88.9012855 41.535 87.9782855 41.808 87.1462855 42.12 86.3142855 42.432 85.6252855 42.874 85.0792855 43.446 84.5332855 44.018 84.1692855 44.759 83.9872855 45.669 83.7272855 47.099 83.9742855 48.2105 84.7282855 49.0035 85.4822855 49.7965 86.5092855 50.193 87.8092855 50.193 88.7452855 50.193 89.6877855 49.9915 90.6367855 49.5885 91.5857855 49.1855 92.4957855 48.607 93.3667855 47.853 94.2377855 47.099 95.0372855 46.202 95.7652855 45.162L95.7652855 45.162zM153.787258 25.2364649C153.377677 23.2794277 152.545046 21.7182727 151.289364 20.553 149.664364 19.045 147.395864 18.291 144.483864 18.291 142.689864 18.291 140.967364 18.603 139.316364 19.227 137.665364 19.851 136.144364 20.7025 134.753364 21.7815 133.362364 22.8605 132.185864 24.063 131.223864 25.389L130.248864 25.389 131.067864 18.759 121.239864 19.344C120.563864 22.594 119.900864 25.7335 119.250864 28.7625 118.600864 31.7915 117.989864 34.71 117.417864 37.518L116.598864 41.418C115.896864 44.642 115.272864 47.5605 114.726864 50.1735 114.180864 52.7865 113.608864 55.484 113.010864 58.266L124.671864 58.266C125.243864 55.484 125.802864 52.806 126.348864 50.232 126.894864 47.658 127.479864 44.915 128.103864 42.003L129.780864 33.93C130.612864 32.968 131.451364 32.11 132.296364 31.356 133.141364 30.602 134.025364 30.004 134.948364 29.562 135.871364 29.12 136.852864 28.899 137.892864 28.899 139.712864 28.899 140.876364 29.6075 141.383364 31.0245 141.890364 32.4415 141.896864 34.32 141.402864 36.66L140.271864 42.042C139.647864 44.954 139.075864 47.684 138.555864 50.232 138.035864 52.78 137.476864 55.458 136.878864 58.266L148.500864 58.266C149.098864 55.484 149.677364 52.7865 150.236364 50.1735 150.795364 47.5605 151.412864 44.642 152.088864 41.418 152.400864 39.91 152.706364 38.454 153.005364 37.05 153.304364 35.646 153.570864 34.398 153.804864 33.306L153.74965 33.56 153.831948 33.4695833C154.389503 32.8658056 154.952836 32.3024722 155.521948 31.7795833L155.949864 31.395C156.807864 30.641 157.698364 30.0365 158.621364 29.5815 159.544364 29.1265 160.525864 28.899 161.565864 28.899 163.385864 28.899 164.549364 29.6075 165.056364 31.0245 165.563364 32.4415 165.569864 34.32 165.075864 36.66L163.944864 42.042C163.346864 44.98 162.781364 47.7165 162.248364 50.2515 161.715364 52.7865 161.149864 55.458 160.551864 58.266L172.212864 58.266C172.784864 55.484 173.343864 52.793 173.889864 50.193 174.435864 47.593 175.059864 44.668 175.761864 41.418 176.073864 39.91 176.379364 38.454 176.678364 37.05 176.977364 35.646 177.243864 34.398 177.477864 33.306 178.465864 28.756 178.153864 25.116 176.541864 22.386 174.929864 19.656 172.134864 18.291 168.156864 18.291 166.362864 18.291 164.633864 18.6095 162.969864 19.2465 161.305864 19.8835 159.765364 20.748 158.348364 21.84 156.931364 22.932 155.715864 24.167 154.701864 25.545L153.84665 25.545 153.787258 25.2364649zM204.202305 18.291C208.284305 18.291 211.612305 19.032 214.186305 20.514 216.760305 21.996 218.502305 24.076 219.412305 26.754 220.322305 29.432 220.335305 32.552 219.451305 36.114 219.243305 36.972 219.028805 37.778 218.807805 38.532 218.642055 39.0975 218.465336 39.648375 218.277648 40.184625L218.277648 40.184625 218.086305 40.716 194.21065 40.716 194.203138 40.8698333C194.148249 42.3576111 194.367805 43.6518333 194.861805 44.7525 195.602805 46.4035 196.831305 47.6385 198.547305 48.4575 200.263305 49.2765 202.369305 49.686 204.865305 49.686 205.957305 49.686 207.172805 49.5885 208.511805 49.3935 209.850805 49.1985 211.183305 48.8995 212.509305 48.4965 213.835305 48.0935 215.057305 47.58 216.175305 46.956L216.175305 46.956 214.615305 56.862C213.913305 57.278 212.951305 57.668 211.729305 58.032 210.507305 58.396 209.096805 58.695 207.497805 58.929 205.898805 59.163 204.176305 59.28 202.330305 59.28 197.650305 59.28 193.743805 58.3765 190.610805 56.5695 187.477805 54.7625 185.267805 52.195 183.980805 48.867 182.693805 45.539 182.518305 41.587 183.454305 37.011 184.234305 33.241 185.560305 29.952 187.432305 27.144 189.304305 24.336 191.657305 22.1585 194.491305 20.6115 197.325305 19.0645 200.562305 18.291 204.202305 18.291zM204.436305 26.52C203.110305 26.52 201.816805 26.871 200.555805 27.573 199.294805 28.275 198.170305 29.367 197.182305 30.849 196.589505 31.7382 196.080945 32.78184 195.656625 33.97992L195.656625 33.97992 195.53965 34.322 209.63365 34.028 209.678078 33.6929751C209.871457 31.9817285 209.619199 30.4487368 208.921305 29.094 208.037305 27.378 206.542305 26.52 204.436305 26.52zM233.818831 58.266C234.390831 55.484 234.949831 52.8125 235.495831 50.2515 236.041831 47.6905 236.626831 44.941 237.250831 42.003L238.927831 33.93C239.759831 32.968 240.611331 32.11 241.482331 31.356 242.353331 30.602 243.263331 30.004 244.212331 29.562 245.161331 29.12 246.194831 28.899 247.312831 28.899 249.366831 28.899 250.666831 29.6075 251.212831 31.0245 251.758831 32.4415 251.771831 34.32 251.251831 36.66L250.120831 42.042C249.522831 44.954 248.957331 47.684 248.424331 50.232 247.891331 52.78 247.325831 55.458 246.727831 58.266L258.388831 58.266C258.986831 55.484 259.565331 52.7865 260.124331 50.1735 260.683331 47.5605 261.287831 44.642 261.937831 41.418 262.275831 39.91 262.594331 38.454 262.893331 37.05 263.192331 35.646 263.458831 34.398 263.692831 33.306 264.654831 28.756 264.316831 25.116 262.678831 22.386 261.040831 19.656 258.115831 18.291 253.903831 18.291 252.057831 18.291 250.283331 18.603 248.580331 19.227 246.877331 19.851 245.323831 20.7025 243.919831 21.7815 242.515831 22.8605 241.332831 24.063 240.370831 25.389L239.395831 25.389 240.214831 18.759 230.386831 19.344C229.710831 22.594 229.047831 25.74 228.397831 28.782 227.747831 31.824 227.136831 34.736 226.564831 37.518L225.745831 41.418C225.069831 44.616 224.452331 47.528 223.893331 50.154 223.334331 52.78 222.755831 55.484 222.157831 58.266L233.818831 58.266zM285.401439 59.319C286.337439 59.319 287.351439 59.2345 288.443439 59.0655 289.535439 58.8965 290.555939 58.6755 291.504939 58.4025 292.453939 58.1295 293.201439 57.811 293.747439 57.447L294.995439 47.892C293.981439 48.594 292.973939 49.088 291.972939 49.374 290.971939 49.66 290.055439 49.803 289.223439 49.803 287.325439 49.803 286.031939 49.153 285.342939 47.853 284.653939 46.553 284.582439 44.655 285.128439 42.159L288.07365 28.119 299.675439 28.119 301.547439 19.344 289.92965 19.344 290.008314 18.978375C290.176502 18.1910625 290.338291 17.4302578 290.493681 16.6959609L290.646939 15.9705C291.049939 14.0595 291.446439 12.2005 291.836439 10.3935 292.226439 8.5865 292.629439 6.669 293.045439 4.641L281.111439 6.708C280.565439 9.282 280.038939 11.778 279.531939 14.196 279.227739 15.6468 278.897799 17.19588 278.542119 18.84324L278.43365 19.344 272.141439 19.344 270.269439 28.119 276.58165 28.119 276.533032 28.3549259 276.392439 29.0355C275.976439 31.0505 275.579939 32.9355 275.202939 34.6905 274.825939 36.4455 274.468439 38.1355 274.130439 39.7605 273.792439 41.3855 273.441439 43.043 273.077439 44.733 272.375439 48.035 272.453439 50.765 273.311439 52.923 274.169439 55.081 275.644939 56.6865 277.737939 57.7395 279.830939 58.7925 282.385439 59.319 285.401439 59.319z"></path>
            </svg>
        </a>
    <?php endif; ?>

    <?php echo e(\Filament\Facades\Filament::renderHook('footer.end')); ?>

</div>

<?php echo e(\Filament\Facades\Filament::renderHook('footer.after')); ?>

<?php /**PATH /Users/asadbekfayzulloev/server/anysoft_pro/resources/views/vendor/filament/components/footer.blade.php ENDPATH**/ ?>