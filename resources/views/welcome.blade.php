<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kahioja</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>
    <body>
        <!-- Nav  -->
        <div id="nav" class="grid grid-cols-5 gap-2 px-14 py-7">
            <!-- logo  -->
            <div>
                <!-- <img src="{{ asset('images/logo.png') }}" alt="Kahioja Logo"> -->
                <svg width="197" height="43" viewBox="0 0 197 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M29.9097 40.487C32.1734 40.487 33.9921 38.649 33.9921 36.4046C33.9921 34.1603 32.1541 32.3223 29.9097 32.3223C27.6461 32.3223 25.8274 34.1603 25.8274 36.4046C25.8274 38.649 27.6461 40.487 29.9097 40.487Z" fill="#F37022"/>
                    <path d="M11.801 42.3826C14.0647 42.3826 15.8834 40.5445 15.8834 38.3002C15.8834 36.0365 14.0453 34.2179 11.801 34.2179C9.55668 34.2179 7.71865 36.0559 7.71865 38.3002C7.71865 40.5445 9.55668 42.3826 11.801 42.3826Z" fill="#F37022"/>
                    <path d="M30.0082 30.9875L9.22883 33.1738C5.08843 33.5994 1.39303 30.6005 0.948035 26.4795L0 17.5215L35.7545 13.7681L36.7025 22.726C37.1668 26.8664 34.1486 30.5618 30.0082 30.9875Z" fill="#F37022"/>
                    <path d="M5.30382 13.5548C4.646 6.84119 9.599 0.766028 16.3126 0.0695131C23.0263 -0.64635 29.1208 4.2486 29.8753 10.9816L25.5995 11.4459C25.1158 7.05401 21.1302 3.86165 16.7383 4.34534C12.3464 4.80968 9.11531 8.7566 9.54096 13.1485L5.30382 13.5548Z" fill="#F37022"/>
                    <path d="M54.5434 22.7262L51.8154 25.7445V31.8777H47.5202V9.82137H51.8154V19.8048L60.6572 9.82137H66.2874L57.5423 19.4372L66.3454 31.8777H60.9474L54.5434 22.7262Z" fill="#222222"/>
                    <path d="M109.587 32.0909V22.9394H99.9714V32.0909H95.6762V10.0345H99.9714V18.8958H109.587V10.0345H113.921V32.0909H109.587Z" fill="#222222"/>
                    <path d="M119.589 32.0909V10.0345H123.923V32.0909H119.589Z" fill="#222222"/>
                    <path d="M139.867 32.9803C133.559 32.9803 128.432 27.8532 128.432 21.5459C128.432 15.2386 133.559 10.1114 139.867 10.1114C146.174 10.1114 151.301 15.2386 151.301 21.5459C151.301 27.8532 146.174 32.9803 139.867 32.9803ZM139.867 14.484C135.958 14.484 132.785 17.657 132.785 21.5652C132.785 25.4735 135.958 28.6465 139.867 28.6465C143.775 28.6465 146.948 25.4735 146.948 21.5652C146.948 17.6377 143.775 14.484 139.867 14.484Z" fill="#222222"/>
                    <path d="M80.4492 9.41507C74.1418 9.41507 69.0147 14.5422 69.0147 20.8495V31.8777H73.3679V25.106H87.5304V32.0325H91.8836V20.8689C91.8836 14.5422 86.7565 9.41507 80.4492 9.41507ZM80.4492 13.7683C84.3187 13.7683 87.453 16.9026 87.511 20.7334H73.3486C73.426 16.8833 76.5796 13.7683 80.4492 13.7683Z" fill="#222222"/>
                    <path d="M185.566 9.41507C179.258 9.41507 174.131 14.5422 174.131 20.8495V31.8777H178.484V25.106H192.647V32.0325H197V20.8689C197 14.5422 191.873 9.41507 185.566 9.41507ZM185.566 13.7683C189.435 13.7683 192.57 16.9026 192.628 20.7334H178.465C178.562 16.8833 181.696 13.7683 185.566 13.7683Z" fill="#222222"/>
                    <path d="M170.513 24.5643V10.3051H166.141V24.5643C166.141 26.5958 164.477 28.2404 162.465 28.2404C160.433 28.2404 158.789 26.5765 158.789 24.5643C158.789 24.4289 158.789 24.2935 158.808 24.158C158.808 24.1 158.827 24.0226 158.847 23.9452H154.455C154.455 24.0032 154.455 24.0806 154.435 24.158C154.435 24.2935 154.435 24.4289 154.435 24.5643C154.435 28.9949 158.034 32.5936 162.465 32.5936C166.837 32.5936 170.417 29.0723 170.494 24.7385L170.513 24.5643Z" fill="#222222"/>
                </svg>
            </div>
            <!-- Category  -->
            <div id="category" class="flex items-center">
                <!-- <img class="w-3" src="{{ asset('images/cate-icon.png') }}" alt="Category Logo"> -->
                <!-- <span class="ml-1 text-lg category">Categories</span>  -->
                <svg width="133" height="30" viewBox="0 0 133 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 7V11H8V7H4ZM4 5H8C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7V11C10 11.5304 9.78929 12.0391 9.41421 12.4142C9.03914 12.7893 8.53043 13 8 13H4C3.46957 13 2.96086 12.7893 2.58579 12.4142C2.21071 12.0391 2 11.5304 2 11V7C2 6.46957 2.21071 5.96086 2.58579 5.58579C2.96086 5.21071 3.46957 5 4 5V5ZM16 5H20C20.5304 5 21.0391 5.21071 21.4142 5.58579C21.7893 5.96086 22 6.46957 22 7V11C22 11.5304 21.7893 12.0391 21.4142 12.4142C21.0391 12.7893 20.5304 13 20 13H16C15.4696 13 14.9609 12.7893 14.5858 12.4142C14.2107 12.0391 14 11.5304 14 11V7C14 6.46957 14.2107 5.96086 14.5858 5.58579C14.9609 5.21071 15.4696 5 16 5V5ZM16 7V11H20V7H16ZM16 17H20C20.5304 17 21.0391 17.2107 21.4142 17.5858C21.7893 17.9609 22 18.4696 22 19V23C22 23.5304 21.7893 24.0391 21.4142 24.4142C21.0391 24.7893 20.5304 25 20 25H16C15.4696 25 14.9609 24.7893 14.5858 24.4142C14.2107 24.0391 14 23.5304 14 23V19C14 18.4696 14.2107 17.9609 14.5858 17.5858C14.9609 17.2107 15.4696 17 16 17ZM16 19V23H20V19H16ZM4 17H8C8.53043 17 9.03914 17.2107 9.41421 17.5858C9.78929 17.9609 10 18.4696 10 19V23C10 23.5304 9.78929 24.0391 9.41421 24.4142C9.03914 24.7893 8.53043 25 8 25H4C3.46957 25 2.96086 24.7893 2.58579 24.4142C2.21071 24.0391 2 23.5304 2 23V19C2 18.4696 2.21071 17.9609 2.58579 17.5858C2.96086 17.2107 3.46957 17 4 17ZM4 19V23H8V19H4Z" fill="#222222"/>
                    <path d="M40 22.3C43.62 22.3 45.78 20 46.42 17.6L44.22 16.88C43.74 18.48 42.38 20 40 20C37.58 20 35.3 18.24 35.3 14.92C35.3 11.48 37.64 9.78 39.98 9.78C42.36 9.78 43.68 11.16 44.1 12.88L46.36 12.12C45.72 9.64 43.58 7.52 39.98 7.52C36.3 7.52 32.84 10.3 32.84 14.92C32.84 19.54 36.18 22.3 40 22.3ZM47.7242 19.36C47.7242 20.9 48.9842 22.3 51.0242 22.3C52.6042 22.3 53.5642 21.5 54.0242 20.76C54.0242 21.54 54.1042 21.94 54.1242 22H56.2842C56.2642 21.9 56.1642 21.32 56.1642 20.44V15.6C56.1642 13.66 55.0242 11.96 52.0242 11.96C49.6242 11.96 48.1042 13.46 47.9242 15.14L50.0442 15.62C50.1442 14.64 50.8242 13.86 52.0442 13.86C53.3242 13.86 53.8842 14.52 53.8842 15.34C53.8842 15.68 53.7242 15.96 53.1642 16.04L50.6642 16.42C49.0042 16.66 47.7242 17.62 47.7242 19.36ZM51.4642 20.48C50.5442 20.48 50.0442 19.88 50.0442 19.22C50.0442 18.42 50.6242 18.02 51.3442 17.9L53.8842 17.52V17.96C53.8842 19.86 52.7642 20.48 51.4642 20.48ZM61.8697 9.28H59.7697V10.74C59.7697 11.6 59.3097 12.26 58.2697 12.26H57.7697V14.32H59.5697V19.22C59.5697 21.04 60.6897 22.12 62.4897 22.12C63.3297 22.12 63.7697 21.96 63.9097 21.9V19.98C63.8097 20 63.4297 20.06 63.1097 20.06C62.2497 20.06 61.8697 19.7 61.8697 18.84V14.32H63.8897V12.26H61.8697V9.28ZM67.7958 16.06C67.8758 15.02 68.7158 13.9 70.1758 13.9C71.7758 13.9 72.5358 14.92 72.5758 16.06H67.7958ZM72.8358 18.6C72.5158 19.56 71.7958 20.3 70.3958 20.3C68.9558 20.3 67.7958 19.24 67.7358 17.76H74.8558C74.8758 17.72 74.9158 17.4 74.9158 17.02C74.9158 13.94 73.1558 11.96 70.1558 11.96C67.6958 11.96 65.4158 14 65.4158 17.08C65.4158 20.38 67.7558 22.3 70.3958 22.3C72.7358 22.3 74.2758 20.92 74.7958 19.22L72.8358 18.6ZM76.4328 22.54C76.6928 24.5 78.4928 26.1 81.0728 26.1C84.7328 26.1 86.0728 23.68 86.0728 21.08V12.26H83.8328V13.5C83.4128 12.7 82.4728 12.08 80.9528 12.08C78.2728 12.08 76.4528 14.22 76.4528 16.82C76.4528 19.56 78.3528 21.56 80.9528 21.56C82.3728 21.56 83.3528 20.9 83.7728 20.14V21.16C83.7728 23.14 82.8528 24.08 81.0128 24.08C79.6728 24.08 78.7328 23.18 78.5728 21.98L76.4328 22.54ZM81.3328 19.58C79.8128 19.58 78.7928 18.52 78.7928 16.82C78.7928 15.16 79.8528 14.08 81.3328 14.08C82.7728 14.08 83.8328 15.16 83.8328 16.82C83.8328 18.5 82.8128 19.58 81.3328 19.58ZM93.1902 20.22C91.7702 20.22 90.4702 19.14 90.4702 17.12C90.4702 15.1 91.7702 14.06 93.1902 14.06C94.6302 14.06 95.9102 15.1 95.9102 17.12C95.9102 19.16 94.6302 20.22 93.1902 20.22ZM93.1902 11.96C90.2902 11.96 88.1502 14.14 88.1502 17.12C88.1502 20.12 90.2902 22.3 93.1902 22.3C96.1102 22.3 98.2502 20.12 98.2502 17.12C98.2502 14.14 96.1102 11.96 93.1902 11.96ZM106.192 12.2C106.092 12.18 105.852 12.14 105.572 12.14C104.292 12.14 103.212 12.76 102.752 13.82V12.26H100.492V22H102.812V17.36C102.812 15.54 103.632 14.5 105.432 14.5C105.672 14.5 105.932 14.52 106.192 14.56V12.2ZM110.429 22V12.26H108.129V22H110.429ZM107.769 8.84C107.769 9.68 108.449 10.34 109.269 10.34C110.109 10.34 110.789 9.68 110.789 8.84C110.789 8 110.109 7.32 109.269 7.32C108.449 7.32 107.769 8 107.769 8.84ZM115.042 16.06C115.122 15.02 115.962 13.9 117.422 13.9C119.022 13.9 119.782 14.92 119.822 16.06H115.042ZM120.082 18.6C119.762 19.56 119.042 20.3 117.642 20.3C116.202 20.3 115.042 19.24 114.982 17.76H122.102C122.122 17.72 122.162 17.4 122.162 17.02C122.162 13.94 120.402 11.96 117.402 11.96C114.942 11.96 112.662 14 112.662 17.08C112.662 20.38 115.002 22.3 117.642 22.3C119.982 22.3 121.522 20.92 122.042 19.22L120.082 18.6ZM123.519 19.36C123.639 20.46 124.719 22.3 127.539 22.3C130.019 22.3 131.219 20.66 131.219 19.18C131.219 17.74 130.259 16.62 128.419 16.22L126.939 15.92C126.339 15.8 125.959 15.42 125.959 14.9C125.959 14.3 126.539 13.78 127.359 13.78C128.659 13.78 129.079 14.68 129.159 15.24L131.119 14.68C130.959 13.72 130.079 11.96 127.359 11.96C125.339 11.96 123.779 13.4 123.779 15.1C123.779 16.44 124.679 17.56 126.399 17.94L127.839 18.26C128.619 18.42 128.979 18.82 128.979 19.34C128.979 19.94 128.479 20.46 127.519 20.46C126.279 20.46 125.619 19.68 125.539 18.8L123.519 19.36Z" fill="#222222"/>
                </svg>
            </div>
            <!-- Search Box  -->
            <div id="search_box" class="col-span-2 w-full">
                <input placeholder="Search products, brands and categories" class="search_box px-8" type="text" name="search" id="search">
            </div>
            <!-- Account & Cart  -->
            <div id="account" class="flex justify-around items-center">
                <!-- Login  -->
                <div id="displayLogin" class="ml-5 mx-auto">
                    <div>
                        <!-- <img class="w-5 mx-auto mb-1" src="{{ asset('images/account.png') }}" alt="Account Logo"> -->
                        <svg class="mx-auto mb-1" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 29.3333C8.63599 29.3333 2.66666 23.364 2.66666 16C2.66666 8.636 8.63599 2.66666 16 2.66666C23.364 2.66666 29.3333 8.636 29.3333 16C29.3333 23.364 23.364 29.3333 16 29.3333ZM16 26.6667C18.829 26.6667 21.5421 25.5429 23.5425 23.5425C25.5428 21.5421 26.6667 18.829 26.6667 16C26.6667 13.171 25.5428 10.4579 23.5425 8.45752C21.5421 6.45714 18.829 5.33333 16 5.33333C13.171 5.33333 10.4579 6.45714 8.45752 8.45752C6.45713 10.4579 5.33332 13.171 5.33332 16C5.33332 18.829 6.45713 21.5421 8.45752 23.5425C10.4579 25.5429 13.171 26.6667 16 26.6667ZM16 8C17.4145 8 18.771 8.5619 19.7712 9.56209C20.7714 10.5623 21.3333 11.9188 21.3333 13.3333V16C21.3333 17.4145 20.7714 18.771 19.7712 19.7712C18.771 20.7714 17.4145 21.3333 16 21.3333C14.5855 21.3333 13.2289 20.7714 12.2288 19.7712C11.2286 18.771 10.6667 17.4145 10.6667 16V13.3333C10.6667 11.9188 11.2286 10.5623 12.2288 9.56209C13.2289 8.5619 14.5855 8 16 8ZM16 10.6667C15.2927 10.6667 14.6145 10.9476 14.1144 11.4477C13.6143 11.9478 13.3333 12.6261 13.3333 13.3333V16C13.3333 16.7072 13.6143 17.3855 14.1144 17.8856C14.6145 18.3857 15.2927 18.6667 16 18.6667C16.7072 18.6667 17.3855 18.3857 17.8856 17.8856C18.3857 17.3855 18.6667 16.7072 18.6667 16V13.3333C18.6667 12.6261 18.3857 11.9478 17.8856 11.4477C17.3855 10.9476 16.7072 10.6667 16 10.6667ZM10.5467 25.168C9.77863 24.7105 9.07091 24.1587 8.43999 23.5253C9.23196 22.5947 10.2414 21.8738 11.3787 21.4267C11.5426 21.3567 11.7189 21.3203 11.8971 21.3197C12.0753 21.3191 12.2519 21.3542 12.4163 21.4229C12.5807 21.4917 12.7297 21.5927 12.8544 21.72C12.9791 21.8473 13.0771 21.9984 13.1424 22.1642C13.2077 22.33 13.2392 22.5072 13.2349 22.6854C13.2305 22.8636 13.1905 23.0391 13.1172 23.2015C13.0439 23.364 12.9388 23.5101 12.808 23.6312C12.6773 23.7523 12.5236 23.846 12.356 23.9067C11.6467 24.1867 11.032 24.624 10.5453 25.168H10.5467ZM21.4053 25.1973C20.8891 24.6263 20.2448 24.1858 19.5253 23.912C19.3567 23.8535 19.2016 23.7617 19.0691 23.6421C18.9366 23.5225 18.8294 23.3776 18.754 23.2158C18.6786 23.0541 18.6364 22.8788 18.63 22.7004C18.6235 22.5221 18.653 22.3442 18.7165 22.1775C18.7801 22.0107 18.8765 21.8584 19 21.7296C19.1236 21.6007 19.2717 21.498 19.4357 21.4275C19.5996 21.357 19.7761 21.3201 19.9545 21.319C20.133 21.318 20.3099 21.3528 20.4747 21.4213C21.6531 21.8695 22.7002 22.6062 23.52 23.564C22.8861 24.1946 22.1756 24.7433 21.4053 25.1973Z" fill="#222222"/>
                        </svg>
                    </div>
                    <div>
                        Account
                    </div>
                </div>
                <!-- Cart  -->
                <div id="displayCart" class="mx-auto">
                    <div>
                        <!-- <img class="w-5 mx-auto mb-1" src="{{ asset('images/login.png') }}" alt="Account Logo"> -->
                        <svg class="mx-auto" width="27" height="27" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.66666 14C4.31303 14 3.9739 14.1405 3.72385 14.3905C3.4738 14.6406 3.33332 14.9797 3.33332 15.3333V19.3333C3.33332 20.7478 3.89523 22.1044 4.89542 23.1046C5.89561 24.1048 7.25217 24.6667 8.66666 24.6667H19.3333C20.7478 24.6667 22.1044 24.1048 23.1046 23.1046C24.1048 22.1044 24.6667 20.7478 24.6667 19.3333V15.3333C24.6667 14.9797 24.5262 14.6406 24.2761 14.3905C24.0261 14.1405 23.6869 14 23.3333 14H4.66666ZM7.33332 11.3333V7.33333C7.33332 5.56522 8.0357 3.86953 9.28594 2.61929C10.5362 1.36904 12.2319 0.666664 14 0.666664C15.7681 0.666664 17.4638 1.36904 18.714 2.61929C19.9643 3.86953 20.6667 5.56522 20.6667 7.33333V11.3333H23.3333C24.3942 11.3333 25.4116 11.7548 26.1617 12.5049C26.9119 13.255 27.3333 14.2725 27.3333 15.3333V19.3333C27.3333 21.4551 26.4905 23.4899 24.9902 24.9902C23.4899 26.4905 21.4551 27.3333 19.3333 27.3333H8.66666C6.54492 27.3333 4.51009 26.4905 3.0098 24.9902C1.50951 23.4899 0.666656 21.4551 0.666656 19.3333L0.666656 15.3333C0.666656 14.2725 1.08808 13.255 1.83823 12.5049C2.58837 11.7548 3.60579 11.3333 4.66666 11.3333H7.33332ZM9.99999 11.3333H18V7.33333C18 6.27246 17.5786 5.25505 16.8284 4.5049C16.0783 3.75476 15.0609 3.33333 14 3.33333C12.9391 3.33333 11.9217 3.75476 11.1716 4.5049C10.4214 5.25505 9.99999 6.27246 9.99999 7.33333V11.3333Z" fill="#222222"/>
                        </svg>
                    </div>
                    <span class="relative -top-6 left-3 bg-yus p-1 text-white rounded-full">20</span>
                    <div>
                        N140,000.00
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart  -->
        <!-- <div class="app hidden"> -->
            <cart></cart>
        <!-- </div> -->
        <!-- Banner -->
        <div id="banner" class="mt-6">
            <div class="flex items-center">
                <!-- <img class="" src="{{ asset('images/right.png') }}" alt="Right Arrow"> -->
                <!-- Left Arrow  -->
                <svg width="69" height="140" viewBox="0 0 69 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_398:8025)">
                    <path d="M0 10C32.5848 10 59 36.4152 59 69V71C59 103.585 32.5848 130 0 130V10Z" fill="white"/>
                    <path d="M25.414 68.6564L29.364 64.7064C29.5462 64.5178 29.647 64.2652 29.6447 64.003C29.6424 63.7408 29.5372 63.49 29.3518 63.3046C29.1664 63.1192 28.9156 63.014 28.6534 63.0118C28.3912 63.0095 28.1386 63.1103 27.95 63.2924L22.293 68.9494C22.1998 69.0421 22.1259 69.1522 22.0754 69.2736C22.0249 69.3949 21.999 69.525 21.999 69.6564C21.999 69.7878 22.0249 69.918 22.0754 70.0393C22.1259 70.1606 22.1998 70.2708 22.293 70.3634L27.95 76.0204C28.0422 76.1159 28.1526 76.1921 28.2746 76.2445C28.3966 76.2969 28.5278 76.3245 28.6606 76.3257C28.7934 76.3268 28.9251 76.3015 29.048 76.2513C29.1709 76.201 29.2825 76.1267 29.3764 76.0328C29.4703 75.9389 29.5445 75.8273 29.5948 75.7044C29.6451 75.5815 29.6704 75.4498 29.6693 75.317C29.6681 75.1842 29.6405 75.053 29.5881 74.931C29.5357 74.809 29.4595 74.6987 29.364 74.6064L25.414 70.6564H35C35.2652 70.6564 35.5196 70.5511 35.7071 70.3635C35.8946 70.176 36 69.9216 36 69.6564C36 69.3912 35.8946 69.1369 35.7071 68.9493C35.5196 68.7618 35.2652 68.6564 35 68.6564H25.414Z" fill="black"/>
                    </g>
                    <defs>
                    <filter id="filter0_d_398:8025" x="-10" y="0" width="79" height="140" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset/>
                    <feGaussianBlur stdDeviation="5"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_398:8025"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_398:8025" result="shape"/>
                    </filter>
                    </defs>
                </svg>
                <!-- Banner Image  -->
                <img style="width:90%;" class="mx-auto" src="{{ asset('images/banner.jpg') }}" alt="banner">
                <!-- Right Arrow  -->
                <!-- <img src="{{ asset('images/left.png') }}" alt="Left Arrow"> -->
                <svg width="69" height="140" viewBox="0 0 69 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_398:8028)">
                    <path d="M69 10C36.4152 10 10 36.4152 10 69V71C10 103.585 36.4152 130 69 130V10Z" fill="white"/>
                    <path d="M43.586 68.6564L39.636 64.7064C39.4538 64.5178 39.353 64.2652 39.3553 64.003C39.3576 63.7408 39.4628 63.49 39.6482 63.3046C39.8336 63.1192 40.0844 63.014 40.3466 63.0118C40.6088 63.0095 40.8614 63.1103 41.05 63.2924L46.707 68.9494C46.8002 69.0421 46.8741 69.1522 46.9246 69.2736C46.9751 69.3949 47.001 69.525 47.001 69.6564C47.001 69.7878 46.9751 69.918 46.9246 70.0393C46.8741 70.1606 46.8002 70.2708 46.707 70.3634L41.05 76.0204C40.9578 76.1159 40.8474 76.1921 40.7254 76.2445C40.6034 76.2969 40.4722 76.3245 40.3394 76.3257C40.2066 76.3268 40.0749 76.3015 39.952 76.2513C39.8291 76.201 39.7175 76.1267 39.6236 76.0328C39.5297 75.9389 39.4555 75.8273 39.4052 75.7044C39.3549 75.5815 39.3296 75.4498 39.3307 75.317C39.3319 75.1842 39.3595 75.053 39.4119 74.931C39.4643 74.809 39.5405 74.6987 39.636 74.6064L43.586 70.6564H34C33.7348 70.6564 33.4804 70.5511 33.2929 70.3635C33.1054 70.176 33 69.9216 33 69.6564C33 69.3912 33.1054 69.1369 33.2929 68.9493C33.4804 68.7618 33.7348 68.6564 34 68.6564H43.586Z" fill="black"/>
                    </g>
                    <defs>
                    <filter id="filter0_d_398:8028" x="0" y="0" width="79" height="140" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset/>
                    <feGaussianBlur stdDeviation="5"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_398:8028"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_398:8028" result="shape"/>
                    </filter>
                    </defs>
                </svg>
            </div>
            <div class="flex flex-row justify-center items-center mt-8 mx-auto">
                <!-- <img class="ml-3" src="{{ asset('images/dot-active.png') }}" alt="dot icon"> -->
                <!-- Active Slider  -->
                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle opacity="0.7" cx="13.5" cy="13.5" r="13" stroke="#F37022"/>
                    <circle cx="13.5" cy="13.5" r="5" fill="#F37022" stroke="#F37022"/>
                </svg>
                <!-- <img class="ml-3" src="{{ asset('images/dot.png') }}" alt="dot icon"> -->
                <!-- Sliders  -->
                <svg class="ml-3" width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="5.5" cy="5.5" r="5.5" fill="#D8D8D8"/>
                </svg>
                <svg class="ml-3" width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="5.5" cy="5.5" r="5.5" fill="#D8D8D8"/>
                </svg>
                <svg class="ml-3" width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="5.5" cy="5.5" r="5.5" fill="#D8D8D8"/>
                </svg>
            </div>
        </div>
        <!-- Popular Category -->
        <div id="popular-cat" class="px-14 mt-8">
            <h1 class="headings-yus">
                Popular Product Categories
            </h1>
            <div class="grid grid-cols-6 gap-6 my-8 text-center">
                <div>
                    <div class="cate-yus rounded-full">
                        <img class="mx-auto" src="{{ asset('images/categories/games.png') }}" alt="Games Logo">
                    </div>
                    <span class="cate-title-yus">Games</span>
                </div>
                <div>
                    <div class="cate-yus rounded-full">
                        <img class="mx-auto" src="{{ asset('images/categories/smart-phones.png') }}" alt="Smart Phone Logo">
                    </div>
                    <span class="cate-title-yus">Smart Phone</span>
                </div>
                <div>
                    <div class="cate-yus rounded-full">
                        <img class="mx-auto" src="{{ asset('images/categories/groceries.png') }}" alt="Groceries Logo">
                    </div>
                    <span class="cate-title-yus">Groceries</span>
                </div>
                <div>
                    <div class="cate-yus rounded-full">
                        <img class="mx-auto" src="{{ asset('images/categories/electronics.png') }}" alt="Electronics Logo">
                    </div>
                    <span class="cate-title-yus">Electronics</span>
                </div>
                <div>
                    <div class="cate-yus rounded-full">
                        <img class="mx-auto" src="{{ asset('images/categories/smart-watches.png') }}" alt="Smart Watches Logo">
                    </div>
                    <span class="cate-title-yus">Smart Watches</span>
                </div>
                <div>
                    <div class="cate-yus rounded-full">
                        <img class="mx-auto" src="{{ asset('images/categories/household.png') }}" alt="Household Logo">
                    </div>
                    <span class="cate-title-yus">Household</span>
                </div>
            </div>
        </div>
        <!-- Main Category -->
        <div id="main-cat" class="px-14 my-8 text-center">
            <div class="grid grid-cols-2 gap-6">
                <div class="bg-white border rounded">
                    <div class="mb-4 rounded-lg">
                        <div class="cate-title-yus my-12 pt-12">Shop Home Appliances</div>
                        <div class="py-8">
                            <img class="mx-auto" src="{{ asset('images/categories/shop-home-appliciances.png') }}" alt="Shop Home Appliances Logo">
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-white rounded-lg">
                            <div class="cate-title-yus my-12">Phone Accessories</div>
                            <div class="py-6">
                                <img class="mx-auto" src="{{ asset('images/categories/phone-accessories.png') }}" alt="Phone Accessories Logo">
                            </div>
                        </div>
                        <div class="bg-white rounded-lg">
                            <div class="cate-title-yus my-12">Watches</div>
                            <div class="py-6">
                                <img class="mx-auto" src="{{ asset('images/categories/watches.png') }}" alt="Watches Logo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border rounded bg-white">
                    <div class="mb-4 rounded-lg">
                        <div class="cate-title-yus my-12 pt-16">Shop Groceries</div>
                        <div class="py-12">
                            <img class="mx-auto" src="{{ asset('images/categories/shop-groceries.png') }}" alt="Shop Groceries Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Product  -->
        <div id="popular-product" class="px-14 my-8">
            <h1 class="headings-yus">
                Popular Product Categories
            </h1>
            <div class="app grid grid-cols-4 gap-6">
                <div>
                    <product 
                        productphoto="{{ asset('images/categories/airpod.png') }}" 
                        productdescription="Apple Airpod with Charging Case" 
                        productname="Apple Airpod with Charging Case" 
                        currprice="N140,000" 
                        prevprice="N160,000" 
                        reviews="60,000" 
                        deliveryfee="600" 
                    />
                </div>
                <div>
                    <product 
                        productphoto="{{ asset('images/categories/smart-watch.png') }}" 
                        productdescription="Apple Airpod with Charging Case" 
                        productname="Apple Airpod with Charging Case" 
                        currprice="N100,000" 
                        prevprice="N160,000" 
                        reviews="30,000" 
                        deliveryfee="200" 
                    />
                </div>
                <div>
                    <product 
                        productphoto="{{ asset('images/categories/headphone.png') }}" 
                        productdescription="Apple Airpod with Charging Case" 
                        productname="Apple Airpod with Charging Case" 
                        currprice="N20,000" 
                        prevprice="N230,000" 
                        reviews="260,000" 
                        deliveryfee="200" 
                    />
                </div>
                <div>
                    <product 
                        productphoto="{{ asset('images/categories/persil.png') }}" 
                        productdescription="Apple Airpod with Charging Case" 
                        productname="Apple Airpod with Charging Case" 
                        currprice="N150,000" 
                        prevprice="N160,000" 
                        reviews="600,000" 
                        deliveryfee="400" 
                    />
                </div>
            </div>
        </div>
        <!-- Top Rated -->
        <div id="popular-product" class="px-14 mt-20 mb-8">
            <h1 class="headings-yus">
                Top Rated
            </h1>
            <div class="grid grid-cols-4 gap-6">
                <div class="bg-white rounded-lg px-4">
                    <img class="mx-auto py-4" src="{{ asset('images/categories/hauwei.png') }}" alt="Air Pod logo">
                    <!-- Product Details  -->
                    <div class="py-3">
                        <h1 class="card-title">Apple Airpod with Charging Case</h1>
                        <div class="flex items-center">
                            <span class="card-curr-price"><b>N140,000</b></span>
                            <span class="card-prev-price"><b>N180,000</b></span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex mr-4">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                            </div>
                            <div class="card-reviews">140 Reviews</div>
                        </div>
                        <span class="flex card-curr-price"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.93408 6.64286H12.5357" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M5.93408 9.31318H9.79123" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M12.8282 21.3916C13.4029 21.3916 13.8688 20.9257 13.8688 20.351C13.8688 19.7762 13.4029 19.3104 12.8282 19.3104C12.2535 19.3104 11.7876 19.7762 11.7876 20.351C11.7876 20.9257 12.2535 21.3916 12.8282 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M19.9689 21.3916C20.5436 21.3916 21.0095 20.9257 21.0095 20.351C21.0095 19.7762 20.5436 19.3104 19.9689 19.3104C19.3942 19.3104 18.9283 19.7762 18.9283 20.351C18.9283 20.9257 19.3942 21.3916 19.9689 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M11.788 20.3796H11.1921C11.1716 20.3796 11.152 20.3714 11.1375 20.357C11.123 20.3425 11.1148 20.3228 11.1148 20.3023V14.8242C11.1148 14.8037 11.123 14.7841 11.1375 14.7696C11.152 14.7551 11.1716 14.7469 11.1921 14.7469H19.4484C19.5066 14.7469 19.564 14.7601 19.6164 14.7854C19.6688 14.8107 19.7148 14.8475 19.7509 14.8931L21.7853 17.4579C21.8395 17.5261 21.869 17.6107 21.869 17.6979V20.3024C21.869 20.3125 21.867 20.3226 21.8631 20.332C21.8592 20.3413 21.8535 20.3498 21.8463 20.357C21.8392 20.3642 21.8306 20.3699 21.8213 20.3738C21.8119 20.3776 21.8018 20.3796 21.7917 20.3796H21.0097" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M18.9286 20.3796H13.8688" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M17.4836 14.747V20.3509" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
</svg> N500</span>
                        <div>
                            <button class="mx-auto relative top-8 btn-yus rounded-full w-2/3 flex flex-row justify-center items-center py-2 text-white">
                                <div class="card-bag-label">
                                    Add to Bag 
                                </div>
                                <div class="ml-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.5 10C3.23478 10 2.98043 10.1054 2.79289 10.2929C2.60536 10.4804 2.5 10.7348 2.5 11V14C2.5 15.0609 2.92143 16.0783 3.67157 16.8284C4.42172 17.5786 5.43913 18 6.5 18H14.5C15.5609 18 16.5783 17.5786 17.3284 16.8284C18.0786 16.0783 18.5 15.0609 18.5 14V11C18.5 10.7348 18.3946 10.4804 18.2071 10.2929C18.0196 10.1054 17.7652 10 17.5 10H3.5ZM5.5 8V5C5.5 3.67392 6.02678 2.40215 6.96447 1.46447C7.90215 0.526784 9.17392 0 10.5 0C11.8261 0 13.0979 0.526784 14.0355 1.46447C14.9732 2.40215 15.5 3.67392 15.5 5V8H17.5C18.2956 8 19.0587 8.31607 19.6213 8.87868C20.1839 9.44129 20.5 10.2044 20.5 11V14C20.5 15.5913 19.8679 17.1174 18.7426 18.2426C17.6174 19.3679 16.0913 20 14.5 20H6.5C4.9087 20 3.38258 19.3679 2.25736 18.2426C1.13214 17.1174 0.5 15.5913 0.5 14L0.5 11C0.5 10.2044 0.81607 9.44129 1.37868 8.87868C1.94129 8.31607 2.70435 8 3.5 8H5.5ZM7.5 8H13.5V5C13.5 4.20435 13.1839 3.44129 12.6213 2.87868C12.0587 2.31607 11.2956 2 10.5 2C9.70435 2 8.94129 2.31607 8.37868 2.87868C7.81607 3.44129 7.5 4.20435 7.5 5V8Z" fill="white"/>
</svg>
                                </div> 
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg px-4">
                    <img class="mx-auto py-4" src="{{ asset('images/categories/apple-airpods.png') }}" alt="Air Pod logo">
                    <!-- Product Details  -->
                    <div class="py-3">
                        <h1 class="card-title">Apple Airpod with Charging Case</h1>
                        <div class="flex items-center">
                            <span class="card-curr-price"><b>N140,000</b></span>
                            <span class="card-prev-price"><b>N180,000</b></span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex mr-4">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                            </div>
                            <div class="card-reviews">140 Reviews</div>
                        </div>
                        <span class="flex card-curr-price"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.93408 6.64286H12.5357" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M5.93408 9.31318H9.79123" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M12.8282 21.3916C13.4029 21.3916 13.8688 20.9257 13.8688 20.351C13.8688 19.7762 13.4029 19.3104 12.8282 19.3104C12.2535 19.3104 11.7876 19.7762 11.7876 20.351C11.7876 20.9257 12.2535 21.3916 12.8282 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M19.9689 21.3916C20.5436 21.3916 21.0095 20.9257 21.0095 20.351C21.0095 19.7762 20.5436 19.3104 19.9689 19.3104C19.3942 19.3104 18.9283 19.7762 18.9283 20.351C18.9283 20.9257 19.3942 21.3916 19.9689 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M11.788 20.3796H11.1921C11.1716 20.3796 11.152 20.3714 11.1375 20.357C11.123 20.3425 11.1148 20.3228 11.1148 20.3023V14.8242C11.1148 14.8037 11.123 14.7841 11.1375 14.7696C11.152 14.7551 11.1716 14.7469 11.1921 14.7469H19.4484C19.5066 14.7469 19.564 14.7601 19.6164 14.7854C19.6688 14.8107 19.7148 14.8475 19.7509 14.8931L21.7853 17.4579C21.8395 17.5261 21.869 17.6107 21.869 17.6979V20.3024C21.869 20.3125 21.867 20.3226 21.8631 20.332C21.8592 20.3413 21.8535 20.3498 21.8463 20.357C21.8392 20.3642 21.8306 20.3699 21.8213 20.3738C21.8119 20.3776 21.8018 20.3796 21.7917 20.3796H21.0097" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M18.9286 20.3796H13.8688" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M17.4836 14.747V20.3509" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
</svg> N500</span>
                        <div>
                            <button class="mx-auto relative top-8 btn-yus rounded-full w-2/3 flex flex-row justify-center items-center py-2 text-white">
                                <div class="card-bag-label">
                                    Add to Bag 
                                </div>
                                <div class="ml-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.5 10C3.23478 10 2.98043 10.1054 2.79289 10.2929C2.60536 10.4804 2.5 10.7348 2.5 11V14C2.5 15.0609 2.92143 16.0783 3.67157 16.8284C4.42172 17.5786 5.43913 18 6.5 18H14.5C15.5609 18 16.5783 17.5786 17.3284 16.8284C18.0786 16.0783 18.5 15.0609 18.5 14V11C18.5 10.7348 18.3946 10.4804 18.2071 10.2929C18.0196 10.1054 17.7652 10 17.5 10H3.5ZM5.5 8V5C5.5 3.67392 6.02678 2.40215 6.96447 1.46447C7.90215 0.526784 9.17392 0 10.5 0C11.8261 0 13.0979 0.526784 14.0355 1.46447C14.9732 2.40215 15.5 3.67392 15.5 5V8H17.5C18.2956 8 19.0587 8.31607 19.6213 8.87868C20.1839 9.44129 20.5 10.2044 20.5 11V14C20.5 15.5913 19.8679 17.1174 18.7426 18.2426C17.6174 19.3679 16.0913 20 14.5 20H6.5C4.9087 20 3.38258 19.3679 2.25736 18.2426C1.13214 17.1174 0.5 15.5913 0.5 14L0.5 11C0.5 10.2044 0.81607 9.44129 1.37868 8.87868C1.94129 8.31607 2.70435 8 3.5 8H5.5ZM7.5 8H13.5V5C13.5 4.20435 13.1839 3.44129 12.6213 2.87868C12.0587 2.31607 11.2956 2 10.5 2C9.70435 2 8.94129 2.31607 8.37868 2.87868C7.81607 3.44129 7.5 4.20435 7.5 5V8Z" fill="white"/>
</svg>
                                </div> 
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg px-4">
                    <img class="mx-auto py-4" src="{{ asset('images/categories/oculus.png') }}" alt="Air Pod logo">
                    <!-- Product Details  -->
                    <div class="py-3">
                        <h1 class="card-title">Apple Airpod with Charging Case</h1>
                        <div class="flex items-center">
                            <span class="card-curr-price"><b>N140,000</b></span>
                            <span class="card-prev-price"><b>N180,000</b></span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex mr-4">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                            </div>
                            <div class="card-reviews">140 Reviews</div>
                        </div>
                        <span class="flex card-curr-price"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.93408 6.64286H12.5357" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M5.93408 9.31318H9.79123" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M12.8282 21.3916C13.4029 21.3916 13.8688 20.9257 13.8688 20.351C13.8688 19.7762 13.4029 19.3104 12.8282 19.3104C12.2535 19.3104 11.7876 19.7762 11.7876 20.351C11.7876 20.9257 12.2535 21.3916 12.8282 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M19.9689 21.3916C20.5436 21.3916 21.0095 20.9257 21.0095 20.351C21.0095 19.7762 20.5436 19.3104 19.9689 19.3104C19.3942 19.3104 18.9283 19.7762 18.9283 20.351C18.9283 20.9257 19.3942 21.3916 19.9689 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M11.788 20.3796H11.1921C11.1716 20.3796 11.152 20.3714 11.1375 20.357C11.123 20.3425 11.1148 20.3228 11.1148 20.3023V14.8242C11.1148 14.8037 11.123 14.7841 11.1375 14.7696C11.152 14.7551 11.1716 14.7469 11.1921 14.7469H19.4484C19.5066 14.7469 19.564 14.7601 19.6164 14.7854C19.6688 14.8107 19.7148 14.8475 19.7509 14.8931L21.7853 17.4579C21.8395 17.5261 21.869 17.6107 21.869 17.6979V20.3024C21.869 20.3125 21.867 20.3226 21.8631 20.332C21.8592 20.3413 21.8535 20.3498 21.8463 20.357C21.8392 20.3642 21.8306 20.3699 21.8213 20.3738C21.8119 20.3776 21.8018 20.3796 21.7917 20.3796H21.0097" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M18.9286 20.3796H13.8688" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M17.4836 14.747V20.3509" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
</svg> N500</span>
                        <div>
                            <button class="mx-auto relative top-8 btn-yus rounded-full w-2/3 flex flex-row justify-center items-center py-2 text-white">
                                <div class="card-bag-label">
                                    Add to Bag 
                                </div>
                                <div class="ml-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.5 10C3.23478 10 2.98043 10.1054 2.79289 10.2929C2.60536 10.4804 2.5 10.7348 2.5 11V14C2.5 15.0609 2.92143 16.0783 3.67157 16.8284C4.42172 17.5786 5.43913 18 6.5 18H14.5C15.5609 18 16.5783 17.5786 17.3284 16.8284C18.0786 16.0783 18.5 15.0609 18.5 14V11C18.5 10.7348 18.3946 10.4804 18.2071 10.2929C18.0196 10.1054 17.7652 10 17.5 10H3.5ZM5.5 8V5C5.5 3.67392 6.02678 2.40215 6.96447 1.46447C7.90215 0.526784 9.17392 0 10.5 0C11.8261 0 13.0979 0.526784 14.0355 1.46447C14.9732 2.40215 15.5 3.67392 15.5 5V8H17.5C18.2956 8 19.0587 8.31607 19.6213 8.87868C20.1839 9.44129 20.5 10.2044 20.5 11V14C20.5 15.5913 19.8679 17.1174 18.7426 18.2426C17.6174 19.3679 16.0913 20 14.5 20H6.5C4.9087 20 3.38258 19.3679 2.25736 18.2426C1.13214 17.1174 0.5 15.5913 0.5 14L0.5 11C0.5 10.2044 0.81607 9.44129 1.37868 8.87868C1.94129 8.31607 2.70435 8 3.5 8H5.5ZM7.5 8H13.5V5C13.5 4.20435 13.1839 3.44129 12.6213 2.87868C12.0587 2.31607 11.2956 2 10.5 2C9.70435 2 8.94129 2.31607 8.37868 2.87868C7.81607 3.44129 7.5 4.20435 7.5 5V8Z" fill="white"/>
</svg>
                                </div> 
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg px-4">
                    <img class="mx-auto py-4" src="{{ asset('images/categories/tide.png') }}" alt="Air Pod logo">
                    <!-- Product Details  -->
                    <div class="py-3">
                        <h1 class="card-title">Apple Airpod with Charging Case</h1>
                        <div class="flex items-center">
                            <span class="card-curr-price"><b>N140,000</b></span>
                            <span class="card-prev-price"><b>N180,000</b></span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex mr-4">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                            </div>
                            <div class="card-reviews">140 Reviews</div>
                        </div>
                        <span class="flex card-curr-price"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.93408 6.64286H12.5357" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M5.93408 9.31318H9.79123" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M12.8282 21.3916C13.4029 21.3916 13.8688 20.9257 13.8688 20.351C13.8688 19.7762 13.4029 19.3104 12.8282 19.3104C12.2535 19.3104 11.7876 19.7762 11.7876 20.351C11.7876 20.9257 12.2535 21.3916 12.8282 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M19.9689 21.3916C20.5436 21.3916 21.0095 20.9257 21.0095 20.351C21.0095 19.7762 20.5436 19.3104 19.9689 19.3104C19.3942 19.3104 18.9283 19.7762 18.9283 20.351C18.9283 20.9257 19.3942 21.3916 19.9689 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M11.788 20.3796H11.1921C11.1716 20.3796 11.152 20.3714 11.1375 20.357C11.123 20.3425 11.1148 20.3228 11.1148 20.3023V14.8242C11.1148 14.8037 11.123 14.7841 11.1375 14.7696C11.152 14.7551 11.1716 14.7469 11.1921 14.7469H19.4484C19.5066 14.7469 19.564 14.7601 19.6164 14.7854C19.6688 14.8107 19.7148 14.8475 19.7509 14.8931L21.7853 17.4579C21.8395 17.5261 21.869 17.6107 21.869 17.6979V20.3024C21.869 20.3125 21.867 20.3226 21.8631 20.332C21.8592 20.3413 21.8535 20.3498 21.8463 20.357C21.8392 20.3642 21.8306 20.3699 21.8213 20.3738C21.8119 20.3776 21.8018 20.3796 21.7917 20.3796H21.0097" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M18.9286 20.3796H13.8688" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M17.4836 14.747V20.3509" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
</svg> N500</span>
                        <div>
                            <button class="mx-auto relative top-8 btn-yus rounded-full w-2/3 flex flex-row justify-center items-center py-2 text-white">
                                <div class="card-bag-label">
                                    Add to Bag 
                                </div>
                                <div class="ml-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.5 10C3.23478 10 2.98043 10.1054 2.79289 10.2929C2.60536 10.4804 2.5 10.7348 2.5 11V14C2.5 15.0609 2.92143 16.0783 3.67157 16.8284C4.42172 17.5786 5.43913 18 6.5 18H14.5C15.5609 18 16.5783 17.5786 17.3284 16.8284C18.0786 16.0783 18.5 15.0609 18.5 14V11C18.5 10.7348 18.3946 10.4804 18.2071 10.2929C18.0196 10.1054 17.7652 10 17.5 10H3.5ZM5.5 8V5C5.5 3.67392 6.02678 2.40215 6.96447 1.46447C7.90215 0.526784 9.17392 0 10.5 0C11.8261 0 13.0979 0.526784 14.0355 1.46447C14.9732 2.40215 15.5 3.67392 15.5 5V8H17.5C18.2956 8 19.0587 8.31607 19.6213 8.87868C20.1839 9.44129 20.5 10.2044 20.5 11V14C20.5 15.5913 19.8679 17.1174 18.7426 18.2426C17.6174 19.3679 16.0913 20 14.5 20H6.5C4.9087 20 3.38258 19.3679 2.25736 18.2426C1.13214 17.1174 0.5 15.5913 0.5 14L0.5 11C0.5 10.2044 0.81607 9.44129 1.37868 8.87868C1.94129 8.31607 2.70435 8 3.5 8H5.5ZM7.5 8H13.5V5C13.5 4.20435 13.1839 3.44129 12.6213 2.87868C12.0587 2.31607 11.2956 2 10.5 2C9.70435 2 8.94129 2.31607 8.37868 2.87868C7.81607 3.44129 7.5 4.20435 7.5 5V8Z" fill="white"/>
</svg>
                                </div> 
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg px-4 my-5">
                    <img class="mx-auto py-4" src="{{ asset('images/categories/woolite.png') }}" alt="Air Pod logo">
                    <!-- Product Details  -->
                    <div class="py-3">
                        <h1 class="card-title">Apple Airpod with Charging Case</h1>
                        <div class="flex items-center">
                            <span class="card-curr-price"><b>N140,000</b></span>
                            <span class="card-prev-price"><b>N180,000</b></span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex mr-4">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                            </div>
                            <div class="card-reviews">140 Reviews</div>
                        </div>
                        <span class="flex card-curr-price"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.93408 6.64286H12.5357" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M5.93408 9.31318H9.79123" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M12.8282 21.3916C13.4029 21.3916 13.8688 20.9257 13.8688 20.351C13.8688 19.7762 13.4029 19.3104 12.8282 19.3104C12.2535 19.3104 11.7876 19.7762 11.7876 20.351C11.7876 20.9257 12.2535 21.3916 12.8282 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M19.9689 21.3916C20.5436 21.3916 21.0095 20.9257 21.0095 20.351C21.0095 19.7762 20.5436 19.3104 19.9689 19.3104C19.3942 19.3104 18.9283 19.7762 18.9283 20.351C18.9283 20.9257 19.3942 21.3916 19.9689 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M11.788 20.3796H11.1921C11.1716 20.3796 11.152 20.3714 11.1375 20.357C11.123 20.3425 11.1148 20.3228 11.1148 20.3023V14.8242C11.1148 14.8037 11.123 14.7841 11.1375 14.7696C11.152 14.7551 11.1716 14.7469 11.1921 14.7469H19.4484C19.5066 14.7469 19.564 14.7601 19.6164 14.7854C19.6688 14.8107 19.7148 14.8475 19.7509 14.8931L21.7853 17.4579C21.8395 17.5261 21.869 17.6107 21.869 17.6979V20.3024C21.869 20.3125 21.867 20.3226 21.8631 20.332C21.8592 20.3413 21.8535 20.3498 21.8463 20.357C21.8392 20.3642 21.8306 20.3699 21.8213 20.3738C21.8119 20.3776 21.8018 20.3796 21.7917 20.3796H21.0097" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M18.9286 20.3796H13.8688" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M17.4836 14.747V20.3509" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
</svg> N500</span>
                        <div>
                            <button class="mx-auto relative top-8 btn-yus rounded-full w-2/3 flex flex-row justify-center items-center py-2 text-white">
                                <div class="card-bag-label">
                                    Add to Bag 
                                </div>
                                <div class="ml-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.5 10C3.23478 10 2.98043 10.1054 2.79289 10.2929C2.60536 10.4804 2.5 10.7348 2.5 11V14C2.5 15.0609 2.92143 16.0783 3.67157 16.8284C4.42172 17.5786 5.43913 18 6.5 18H14.5C15.5609 18 16.5783 17.5786 17.3284 16.8284C18.0786 16.0783 18.5 15.0609 18.5 14V11C18.5 10.7348 18.3946 10.4804 18.2071 10.2929C18.0196 10.1054 17.7652 10 17.5 10H3.5ZM5.5 8V5C5.5 3.67392 6.02678 2.40215 6.96447 1.46447C7.90215 0.526784 9.17392 0 10.5 0C11.8261 0 13.0979 0.526784 14.0355 1.46447C14.9732 2.40215 15.5 3.67392 15.5 5V8H17.5C18.2956 8 19.0587 8.31607 19.6213 8.87868C20.1839 9.44129 20.5 10.2044 20.5 11V14C20.5 15.5913 19.8679 17.1174 18.7426 18.2426C17.6174 19.3679 16.0913 20 14.5 20H6.5C4.9087 20 3.38258 19.3679 2.25736 18.2426C1.13214 17.1174 0.5 15.5913 0.5 14L0.5 11C0.5 10.2044 0.81607 9.44129 1.37868 8.87868C1.94129 8.31607 2.70435 8 3.5 8H5.5ZM7.5 8H13.5V5C13.5 4.20435 13.1839 3.44129 12.6213 2.87868C12.0587 2.31607 11.2956 2 10.5 2C9.70435 2 8.94129 2.31607 8.37868 2.87868C7.81607 3.44129 7.5 4.20435 7.5 5V8Z" fill="white"/>
</svg>
                                </div> 
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg px-4 my-5">
                    <img class="mx-auto py-4" src="{{ asset('images/categories/broom.png') }}" alt="Air Pod logo">
                    <!-- Product Details  -->
                    <div class="py-3">
                        <h1 class="card-title">Apple Airpod with Charging Case</h1>
                        <div class="flex items-center">
                            <span class="card-curr-price"><b>N140,000</b></span>
                            <span class="card-prev-price"><b>N180,000</b></span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex mr-4">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                            </div>
                            <div class="card-reviews">140 Reviews</div>
                        </div>
                        <span class="flex card-curr-price"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.93408 6.64286H12.5357" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M5.93408 9.31318H9.79123" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M12.8282 21.3916C13.4029 21.3916 13.8688 20.9257 13.8688 20.351C13.8688 19.7762 13.4029 19.3104 12.8282 19.3104C12.2535 19.3104 11.7876 19.7762 11.7876 20.351C11.7876 20.9257 12.2535 21.3916 12.8282 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M19.9689 21.3916C20.5436 21.3916 21.0095 20.9257 21.0095 20.351C21.0095 19.7762 20.5436 19.3104 19.9689 19.3104C19.3942 19.3104 18.9283 19.7762 18.9283 20.351C18.9283 20.9257 19.3942 21.3916 19.9689 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M11.788 20.3796H11.1921C11.1716 20.3796 11.152 20.3714 11.1375 20.357C11.123 20.3425 11.1148 20.3228 11.1148 20.3023V14.8242C11.1148 14.8037 11.123 14.7841 11.1375 14.7696C11.152 14.7551 11.1716 14.7469 11.1921 14.7469H19.4484C19.5066 14.7469 19.564 14.7601 19.6164 14.7854C19.6688 14.8107 19.7148 14.8475 19.7509 14.8931L21.7853 17.4579C21.8395 17.5261 21.869 17.6107 21.869 17.6979V20.3024C21.869 20.3125 21.867 20.3226 21.8631 20.332C21.8592 20.3413 21.8535 20.3498 21.8463 20.357C21.8392 20.3642 21.8306 20.3699 21.8213 20.3738C21.8119 20.3776 21.8018 20.3796 21.7917 20.3796H21.0097" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M18.9286 20.3796H13.8688" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M17.4836 14.747V20.3509" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
</svg> N500</span>
                        <div>
                            <button class="mx-auto relative top-8 btn-yus rounded-full w-2/3 flex flex-row justify-center items-center py-2 text-white">
                                <div class="card-bag-label">
                                    Add to Bag 
                                </div>
                                <div class="ml-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.5 10C3.23478 10 2.98043 10.1054 2.79289 10.2929C2.60536 10.4804 2.5 10.7348 2.5 11V14C2.5 15.0609 2.92143 16.0783 3.67157 16.8284C4.42172 17.5786 5.43913 18 6.5 18H14.5C15.5609 18 16.5783 17.5786 17.3284 16.8284C18.0786 16.0783 18.5 15.0609 18.5 14V11C18.5 10.7348 18.3946 10.4804 18.2071 10.2929C18.0196 10.1054 17.7652 10 17.5 10H3.5ZM5.5 8V5C5.5 3.67392 6.02678 2.40215 6.96447 1.46447C7.90215 0.526784 9.17392 0 10.5 0C11.8261 0 13.0979 0.526784 14.0355 1.46447C14.9732 2.40215 15.5 3.67392 15.5 5V8H17.5C18.2956 8 19.0587 8.31607 19.6213 8.87868C20.1839 9.44129 20.5 10.2044 20.5 11V14C20.5 15.5913 19.8679 17.1174 18.7426 18.2426C17.6174 19.3679 16.0913 20 14.5 20H6.5C4.9087 20 3.38258 19.3679 2.25736 18.2426C1.13214 17.1174 0.5 15.5913 0.5 14L0.5 11C0.5 10.2044 0.81607 9.44129 1.37868 8.87868C1.94129 8.31607 2.70435 8 3.5 8H5.5ZM7.5 8H13.5V5C13.5 4.20435 13.1839 3.44129 12.6213 2.87868C12.0587 2.31607 11.2956 2 10.5 2C9.70435 2 8.94129 2.31607 8.37868 2.87868C7.81607 3.44129 7.5 4.20435 7.5 5V8Z" fill="white"/>
</svg>
                                </div> 
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg px-4 my-5">
                    <img class="mx-auto py-4" src="{{ asset('images/categories/pen-drive.png') }}" alt="Air Pod logo">
                    <!-- Product Details  -->
                    <div class="py-3">
                        <h1 class="card-title">Apple Airpod with Charging Case</h1>
                        <div class="flex items-center">
                            <span class="card-curr-price"><b>N140,000</b></span>
                            <span class="card-prev-price"><b>N180,000</b></span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex mr-4">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                            </div>
                            <div class="card-reviews">140 Reviews</div>
                        </div>
                        <span class="flex card-curr-price"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.93408 6.64286H12.5357" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M5.93408 9.31318H9.79123" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M12.8282 21.3916C13.4029 21.3916 13.8688 20.9257 13.8688 20.351C13.8688 19.7762 13.4029 19.3104 12.8282 19.3104C12.2535 19.3104 11.7876 19.7762 11.7876 20.351C11.7876 20.9257 12.2535 21.3916 12.8282 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M19.9689 21.3916C20.5436 21.3916 21.0095 20.9257 21.0095 20.351C21.0095 19.7762 20.5436 19.3104 19.9689 19.3104C19.3942 19.3104 18.9283 19.7762 18.9283 20.351C18.9283 20.9257 19.3942 21.3916 19.9689 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M11.788 20.3796H11.1921C11.1716 20.3796 11.152 20.3714 11.1375 20.357C11.123 20.3425 11.1148 20.3228 11.1148 20.3023V14.8242C11.1148 14.8037 11.123 14.7841 11.1375 14.7696C11.152 14.7551 11.1716 14.7469 11.1921 14.7469H19.4484C19.5066 14.7469 19.564 14.7601 19.6164 14.7854C19.6688 14.8107 19.7148 14.8475 19.7509 14.8931L21.7853 17.4579C21.8395 17.5261 21.869 17.6107 21.869 17.6979V20.3024C21.869 20.3125 21.867 20.3226 21.8631 20.332C21.8592 20.3413 21.8535 20.3498 21.8463 20.357C21.8392 20.3642 21.8306 20.3699 21.8213 20.3738C21.8119 20.3776 21.8018 20.3796 21.7917 20.3796H21.0097" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M18.9286 20.3796H13.8688" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M17.4836 14.747V20.3509" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
</svg> N500</span>
                        <div>
                            <button class="mx-auto relative top-8 btn-yus rounded-full w-2/3 flex flex-row justify-center items-center py-2 text-white">
                                <div class="card-bag-label">
                                    Add to Bag 
                                </div>
                                <div class="ml-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.5 10C3.23478 10 2.98043 10.1054 2.79289 10.2929C2.60536 10.4804 2.5 10.7348 2.5 11V14C2.5 15.0609 2.92143 16.0783 3.67157 16.8284C4.42172 17.5786 5.43913 18 6.5 18H14.5C15.5609 18 16.5783 17.5786 17.3284 16.8284C18.0786 16.0783 18.5 15.0609 18.5 14V11C18.5 10.7348 18.3946 10.4804 18.2071 10.2929C18.0196 10.1054 17.7652 10 17.5 10H3.5ZM5.5 8V5C5.5 3.67392 6.02678 2.40215 6.96447 1.46447C7.90215 0.526784 9.17392 0 10.5 0C11.8261 0 13.0979 0.526784 14.0355 1.46447C14.9732 2.40215 15.5 3.67392 15.5 5V8H17.5C18.2956 8 19.0587 8.31607 19.6213 8.87868C20.1839 9.44129 20.5 10.2044 20.5 11V14C20.5 15.5913 19.8679 17.1174 18.7426 18.2426C17.6174 19.3679 16.0913 20 14.5 20H6.5C4.9087 20 3.38258 19.3679 2.25736 18.2426C1.13214 17.1174 0.5 15.5913 0.5 14L0.5 11C0.5 10.2044 0.81607 9.44129 1.37868 8.87868C1.94129 8.31607 2.70435 8 3.5 8H5.5ZM7.5 8H13.5V5C13.5 4.20435 13.1839 3.44129 12.6213 2.87868C12.0587 2.31607 11.2956 2 10.5 2C9.70435 2 8.94129 2.31607 8.37868 2.87868C7.81607 3.44129 7.5 4.20435 7.5 5V8Z" fill="white"/>
</svg>
                                </div> 
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg px-4 my-5">
                    <img class="mx-auto py-4" src="{{ asset('images/categories/pad.png') }}" alt="Air Pod logo">
                    <!-- Product Details  -->
                    <div class="py-3">
                        <h1 class="card-title">Apple Airpod with Charging Case</h1>
                        <div class="flex items-center">
                            <span class="card-curr-price"><b>N140,000</b></span>
                            <span class="card-prev-price"><b>N180,000</b></span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex mr-4">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                            </div>
                            <div class="card-reviews">140 Reviews</div>
                        </div>
                        <span class="flex card-curr-price"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.93408 6.64286H12.5357" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M5.93408 9.31318H9.79123" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M12.8282 21.3916C13.4029 21.3916 13.8688 20.9257 13.8688 20.351C13.8688 19.7762 13.4029 19.3104 12.8282 19.3104C12.2535 19.3104 11.7876 19.7762 11.7876 20.351C11.7876 20.9257 12.2535 21.3916 12.8282 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M19.9689 21.3916C20.5436 21.3916 21.0095 20.9257 21.0095 20.351C21.0095 19.7762 20.5436 19.3104 19.9689 19.3104C19.3942 19.3104 18.9283 19.7762 18.9283 20.351C18.9283 20.9257 19.3942 21.3916 19.9689 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M11.788 20.3796H11.1921C11.1716 20.3796 11.152 20.3714 11.1375 20.357C11.123 20.3425 11.1148 20.3228 11.1148 20.3023V14.8242C11.1148 14.8037 11.123 14.7841 11.1375 14.7696C11.152 14.7551 11.1716 14.7469 11.1921 14.7469H19.4484C19.5066 14.7469 19.564 14.7601 19.6164 14.7854C19.6688 14.8107 19.7148 14.8475 19.7509 14.8931L21.7853 17.4579C21.8395 17.5261 21.869 17.6107 21.869 17.6979V20.3024C21.869 20.3125 21.867 20.3226 21.8631 20.332C21.8592 20.3413 21.8535 20.3498 21.8463 20.357C21.8392 20.3642 21.8306 20.3699 21.8213 20.3738C21.8119 20.3776 21.8018 20.3796 21.7917 20.3796H21.0097" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M18.9286 20.3796H13.8688" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M17.4836 14.747V20.3509" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
</svg> N500</span>
                        <div>
                            <button class="mx-auto relative top-8 btn-yus rounded-full w-2/3 flex flex-row justify-center items-center py-2 text-white">
                                <div class="card-bag-label">
                                    Add to Bag 
                                </div>
                                <div class="ml-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.5 10C3.23478 10 2.98043 10.1054 2.79289 10.2929C2.60536 10.4804 2.5 10.7348 2.5 11V14C2.5 15.0609 2.92143 16.0783 3.67157 16.8284C4.42172 17.5786 5.43913 18 6.5 18H14.5C15.5609 18 16.5783 17.5786 17.3284 16.8284C18.0786 16.0783 18.5 15.0609 18.5 14V11C18.5 10.7348 18.3946 10.4804 18.2071 10.2929C18.0196 10.1054 17.7652 10 17.5 10H3.5ZM5.5 8V5C5.5 3.67392 6.02678 2.40215 6.96447 1.46447C7.90215 0.526784 9.17392 0 10.5 0C11.8261 0 13.0979 0.526784 14.0355 1.46447C14.9732 2.40215 15.5 3.67392 15.5 5V8H17.5C18.2956 8 19.0587 8.31607 19.6213 8.87868C20.1839 9.44129 20.5 10.2044 20.5 11V14C20.5 15.5913 19.8679 17.1174 18.7426 18.2426C17.6174 19.3679 16.0913 20 14.5 20H6.5C4.9087 20 3.38258 19.3679 2.25736 18.2426C1.13214 17.1174 0.5 15.5913 0.5 14L0.5 11C0.5 10.2044 0.81607 9.44129 1.37868 8.87868C1.94129 8.31607 2.70435 8 3.5 8H5.5ZM7.5 8H13.5V5C13.5 4.20435 13.1839 3.44129 12.6213 2.87868C12.0587 2.31607 11.2956 2 10.5 2C9.70435 2 8.94129 2.31607 8.37868 2.87868C7.81607 3.44129 7.5 4.20435 7.5 5V8Z" fill="white"/>
</svg>
                                </div> 
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner 2 -->
        <div id="banner2" class="mt-16">
            <div class="flex items-center">
                <img class="mx-auto" src="{{ asset('images/banner-2.png') }}" alt="banner 2">
            </div>
        </div>
        <!-- Fruits  -->
        <div id="fruits" class="px-14 my-8">
            <div class="grid grid-cols-4 gap-6">
                <div class="bg-white rounded-lg px-4">
                    <img class="mx-auto py-4" src="{{ asset('images/fruit-1.png') }}" alt="Air Pod logo">
                    <!-- Product Details  -->
                    <div class="py-3">
                        <h1 class="card-title">Apple Airpod with Charging Case</h1>
                        <div class="flex items-center">
                            <span class="card-curr-price"><b>N140,000</b></span>
                            <span class="card-prev-price"><b>N180,000</b></span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex mr-4">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                            </div>
                            <div class="card-reviews">140 Reviews</div>
                        </div>
                        <span class="flex card-curr-price"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.93408 6.64286H12.5357" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M5.93408 9.31318H9.79123" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M12.8282 21.3916C13.4029 21.3916 13.8688 20.9257 13.8688 20.351C13.8688 19.7762 13.4029 19.3104 12.8282 19.3104C12.2535 19.3104 11.7876 19.7762 11.7876 20.351C11.7876 20.9257 12.2535 21.3916 12.8282 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M19.9689 21.3916C20.5436 21.3916 21.0095 20.9257 21.0095 20.351C21.0095 19.7762 20.5436 19.3104 19.9689 19.3104C19.3942 19.3104 18.9283 19.7762 18.9283 20.351C18.9283 20.9257 19.3942 21.3916 19.9689 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M11.788 20.3796H11.1921C11.1716 20.3796 11.152 20.3714 11.1375 20.357C11.123 20.3425 11.1148 20.3228 11.1148 20.3023V14.8242C11.1148 14.8037 11.123 14.7841 11.1375 14.7696C11.152 14.7551 11.1716 14.7469 11.1921 14.7469H19.4484C19.5066 14.7469 19.564 14.7601 19.6164 14.7854C19.6688 14.8107 19.7148 14.8475 19.7509 14.8931L21.7853 17.4579C21.8395 17.5261 21.869 17.6107 21.869 17.6979V20.3024C21.869 20.3125 21.867 20.3226 21.8631 20.332C21.8592 20.3413 21.8535 20.3498 21.8463 20.357C21.8392 20.3642 21.8306 20.3699 21.8213 20.3738C21.8119 20.3776 21.8018 20.3796 21.7917 20.3796H21.0097" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M18.9286 20.3796H13.8688" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M17.4836 14.747V20.3509" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
</svg> N500</span>
                        <div>
                            <button class="mx-auto relative top-8 btn-yus rounded-full w-2/3 flex flex-row justify-center items-center py-2 text-white">
                                <div class="card-bag-label">
                                    Add to Bag 
                                </div>
                                <div class="ml-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.5 10C3.23478 10 2.98043 10.1054 2.79289 10.2929C2.60536 10.4804 2.5 10.7348 2.5 11V14C2.5 15.0609 2.92143 16.0783 3.67157 16.8284C4.42172 17.5786 5.43913 18 6.5 18H14.5C15.5609 18 16.5783 17.5786 17.3284 16.8284C18.0786 16.0783 18.5 15.0609 18.5 14V11C18.5 10.7348 18.3946 10.4804 18.2071 10.2929C18.0196 10.1054 17.7652 10 17.5 10H3.5ZM5.5 8V5C5.5 3.67392 6.02678 2.40215 6.96447 1.46447C7.90215 0.526784 9.17392 0 10.5 0C11.8261 0 13.0979 0.526784 14.0355 1.46447C14.9732 2.40215 15.5 3.67392 15.5 5V8H17.5C18.2956 8 19.0587 8.31607 19.6213 8.87868C20.1839 9.44129 20.5 10.2044 20.5 11V14C20.5 15.5913 19.8679 17.1174 18.7426 18.2426C17.6174 19.3679 16.0913 20 14.5 20H6.5C4.9087 20 3.38258 19.3679 2.25736 18.2426C1.13214 17.1174 0.5 15.5913 0.5 14L0.5 11C0.5 10.2044 0.81607 9.44129 1.37868 8.87868C1.94129 8.31607 2.70435 8 3.5 8H5.5ZM7.5 8H13.5V5C13.5 4.20435 13.1839 3.44129 12.6213 2.87868C12.0587 2.31607 11.2956 2 10.5 2C9.70435 2 8.94129 2.31607 8.37868 2.87868C7.81607 3.44129 7.5 4.20435 7.5 5V8Z" fill="white"/>
</svg>
                                </div> 
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg px-4">
                    <img class="mx-auto py-4" src="{{ asset('images/fruit-2.png') }}" alt="Air Pod logo">
                    <!-- Product Details  -->
                    <div class="py-3">
                        <h1 class="card-title">Apple Airpod with Charging Case</h1>
                        <div class="flex items-center">
                            <span class="card-curr-price"><b>N140,000</b></span>
                            <span class="card-prev-price"><b>N180,000</b></span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex mr-4">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                            </div>
                            <div class="card-reviews">140 Reviews</div>
                        </div>
                        <span class="flex card-curr-price"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.93408 6.64286H12.5357" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M5.93408 9.31318H9.79123" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M12.8282 21.3916C13.4029 21.3916 13.8688 20.9257 13.8688 20.351C13.8688 19.7762 13.4029 19.3104 12.8282 19.3104C12.2535 19.3104 11.7876 19.7762 11.7876 20.351C11.7876 20.9257 12.2535 21.3916 12.8282 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M19.9689 21.3916C20.5436 21.3916 21.0095 20.9257 21.0095 20.351C21.0095 19.7762 20.5436 19.3104 19.9689 19.3104C19.3942 19.3104 18.9283 19.7762 18.9283 20.351C18.9283 20.9257 19.3942 21.3916 19.9689 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M11.788 20.3796H11.1921C11.1716 20.3796 11.152 20.3714 11.1375 20.357C11.123 20.3425 11.1148 20.3228 11.1148 20.3023V14.8242C11.1148 14.8037 11.123 14.7841 11.1375 14.7696C11.152 14.7551 11.1716 14.7469 11.1921 14.7469H19.4484C19.5066 14.7469 19.564 14.7601 19.6164 14.7854C19.6688 14.8107 19.7148 14.8475 19.7509 14.8931L21.7853 17.4579C21.8395 17.5261 21.869 17.6107 21.869 17.6979V20.3024C21.869 20.3125 21.867 20.3226 21.8631 20.332C21.8592 20.3413 21.8535 20.3498 21.8463 20.357C21.8392 20.3642 21.8306 20.3699 21.8213 20.3738C21.8119 20.3776 21.8018 20.3796 21.7917 20.3796H21.0097" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M18.9286 20.3796H13.8688" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M17.4836 14.747V20.3509" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
</svg> N500</span>
                        <div>
                            <button class="mx-auto relative top-8 btn-yus rounded-full w-2/3 flex flex-row justify-center items-center py-2 text-white">
                                <div class="card-bag-label">
                                    Add to Bag 
                                </div>
                                <div class="ml-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.5 10C3.23478 10 2.98043 10.1054 2.79289 10.2929C2.60536 10.4804 2.5 10.7348 2.5 11V14C2.5 15.0609 2.92143 16.0783 3.67157 16.8284C4.42172 17.5786 5.43913 18 6.5 18H14.5C15.5609 18 16.5783 17.5786 17.3284 16.8284C18.0786 16.0783 18.5 15.0609 18.5 14V11C18.5 10.7348 18.3946 10.4804 18.2071 10.2929C18.0196 10.1054 17.7652 10 17.5 10H3.5ZM5.5 8V5C5.5 3.67392 6.02678 2.40215 6.96447 1.46447C7.90215 0.526784 9.17392 0 10.5 0C11.8261 0 13.0979 0.526784 14.0355 1.46447C14.9732 2.40215 15.5 3.67392 15.5 5V8H17.5C18.2956 8 19.0587 8.31607 19.6213 8.87868C20.1839 9.44129 20.5 10.2044 20.5 11V14C20.5 15.5913 19.8679 17.1174 18.7426 18.2426C17.6174 19.3679 16.0913 20 14.5 20H6.5C4.9087 20 3.38258 19.3679 2.25736 18.2426C1.13214 17.1174 0.5 15.5913 0.5 14L0.5 11C0.5 10.2044 0.81607 9.44129 1.37868 8.87868C1.94129 8.31607 2.70435 8 3.5 8H5.5ZM7.5 8H13.5V5C13.5 4.20435 13.1839 3.44129 12.6213 2.87868C12.0587 2.31607 11.2956 2 10.5 2C9.70435 2 8.94129 2.31607 8.37868 2.87868C7.81607 3.44129 7.5 4.20435 7.5 5V8Z" fill="white"/>
</svg>
                                </div> 
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg px-4">
                    <img class="mx-auto py-4" src="{{ asset('images/fruit-3.png') }}" alt="Air Pod logo">
                    <!-- Product Details  -->
                    <div class="py-3">
                        <h1 class="card-title">Apple Airpod with Charging Case</h1>
                        <div class="flex items-center">
                            <span class="card-curr-price"><b>N140,000</b></span>
                            <span class="card-prev-price"><b>N180,000</b></span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex mr-4">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                            </div>
                            <div class="card-reviews">140 Reviews</div>
                        </div>
                        <span class="flex card-curr-price"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.93408 6.64286H12.5357" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M5.93408 9.31318H9.79123" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M12.8282 21.3916C13.4029 21.3916 13.8688 20.9257 13.8688 20.351C13.8688 19.7762 13.4029 19.3104 12.8282 19.3104C12.2535 19.3104 11.7876 19.7762 11.7876 20.351C11.7876 20.9257 12.2535 21.3916 12.8282 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M19.9689 21.3916C20.5436 21.3916 21.0095 20.9257 21.0095 20.351C21.0095 19.7762 20.5436 19.3104 19.9689 19.3104C19.3942 19.3104 18.9283 19.7762 18.9283 20.351C18.9283 20.9257 19.3942 21.3916 19.9689 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M11.788 20.3796H11.1921C11.1716 20.3796 11.152 20.3714 11.1375 20.357C11.123 20.3425 11.1148 20.3228 11.1148 20.3023V14.8242C11.1148 14.8037 11.123 14.7841 11.1375 14.7696C11.152 14.7551 11.1716 14.7469 11.1921 14.7469H19.4484C19.5066 14.7469 19.564 14.7601 19.6164 14.7854C19.6688 14.8107 19.7148 14.8475 19.7509 14.8931L21.7853 17.4579C21.8395 17.5261 21.869 17.6107 21.869 17.6979V20.3024C21.869 20.3125 21.867 20.3226 21.8631 20.332C21.8592 20.3413 21.8535 20.3498 21.8463 20.357C21.8392 20.3642 21.8306 20.3699 21.8213 20.3738C21.8119 20.3776 21.8018 20.3796 21.7917 20.3796H21.0097" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M18.9286 20.3796H13.8688" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M17.4836 14.747V20.3509" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
</svg> N500</span>
                        <div>
                            <button class="mx-auto relative top-8 btn-yus rounded-full w-2/3 flex flex-row justify-center items-center py-2 text-white">
                                <div class="card-bag-label">
                                    Add to Bag 
                                </div>
                                <div class="ml-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.5 10C3.23478 10 2.98043 10.1054 2.79289 10.2929C2.60536 10.4804 2.5 10.7348 2.5 11V14C2.5 15.0609 2.92143 16.0783 3.67157 16.8284C4.42172 17.5786 5.43913 18 6.5 18H14.5C15.5609 18 16.5783 17.5786 17.3284 16.8284C18.0786 16.0783 18.5 15.0609 18.5 14V11C18.5 10.7348 18.3946 10.4804 18.2071 10.2929C18.0196 10.1054 17.7652 10 17.5 10H3.5ZM5.5 8V5C5.5 3.67392 6.02678 2.40215 6.96447 1.46447C7.90215 0.526784 9.17392 0 10.5 0C11.8261 0 13.0979 0.526784 14.0355 1.46447C14.9732 2.40215 15.5 3.67392 15.5 5V8H17.5C18.2956 8 19.0587 8.31607 19.6213 8.87868C20.1839 9.44129 20.5 10.2044 20.5 11V14C20.5 15.5913 19.8679 17.1174 18.7426 18.2426C17.6174 19.3679 16.0913 20 14.5 20H6.5C4.9087 20 3.38258 19.3679 2.25736 18.2426C1.13214 17.1174 0.5 15.5913 0.5 14L0.5 11C0.5 10.2044 0.81607 9.44129 1.37868 8.87868C1.94129 8.31607 2.70435 8 3.5 8H5.5ZM7.5 8H13.5V5C13.5 4.20435 13.1839 3.44129 12.6213 2.87868C12.0587 2.31607 11.2956 2 10.5 2C9.70435 2 8.94129 2.31607 8.37868 2.87868C7.81607 3.44129 7.5 4.20435 7.5 5V8Z" fill="white"/>
</svg>
                                </div> 
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg px-4">
                    <img class="mx-auto py-4" src="{{ asset('images/fruit-4.png') }}" alt="Air Pod logo">
                    <!-- Product Details  -->
                    <div class="py-3">
                        <h1 class="card-title">Apple Airpod with Charging Case</h1>
                        <div class="flex items-center">
                            <span class="card-curr-price"><b>N140,000</b></span>
                            <span class="card-prev-price"><b>N180,000</b></span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex mr-4">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                            </div>
                            <div class="card-reviews">140 Reviews</div>
                        </div>
                        <span class="flex card-curr-price"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.93408 6.64286H12.5357" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M5.93408 9.31318H9.79123" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M12.8282 21.3916C13.4029 21.3916 13.8688 20.9257 13.8688 20.351C13.8688 19.7762 13.4029 19.3104 12.8282 19.3104C12.2535 19.3104 11.7876 19.7762 11.7876 20.351C11.7876 20.9257 12.2535 21.3916 12.8282 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M19.9689 21.3916C20.5436 21.3916 21.0095 20.9257 21.0095 20.351C21.0095 19.7762 20.5436 19.3104 19.9689 19.3104C19.3942 19.3104 18.9283 19.7762 18.9283 20.351C18.9283 20.9257 19.3942 21.3916 19.9689 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M11.788 20.3796H11.1921C11.1716 20.3796 11.152 20.3714 11.1375 20.357C11.123 20.3425 11.1148 20.3228 11.1148 20.3023V14.8242C11.1148 14.8037 11.123 14.7841 11.1375 14.7696C11.152 14.7551 11.1716 14.7469 11.1921 14.7469H19.4484C19.5066 14.7469 19.564 14.7601 19.6164 14.7854C19.6688 14.8107 19.7148 14.8475 19.7509 14.8931L21.7853 17.4579C21.8395 17.5261 21.869 17.6107 21.869 17.6979V20.3024C21.869 20.3125 21.867 20.3226 21.8631 20.332C21.8592 20.3413 21.8535 20.3498 21.8463 20.357C21.8392 20.3642 21.8306 20.3699 21.8213 20.3738C21.8119 20.3776 21.8018 20.3796 21.7917 20.3796H21.0097" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M18.9286 20.3796H13.8688" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M17.4836 14.747V20.3509" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
</svg> N500</span>
                        <div>
                            <button class="mx-auto relative top-8 btn-yus rounded-full w-2/3 flex flex-row justify-center items-center py-2 text-white">
                                <div class="card-bag-label">
                                    Add to Bag 
                                </div>
                                <div class="ml-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.5 10C3.23478 10 2.98043 10.1054 2.79289 10.2929C2.60536 10.4804 2.5 10.7348 2.5 11V14C2.5 15.0609 2.92143 16.0783 3.67157 16.8284C4.42172 17.5786 5.43913 18 6.5 18H14.5C15.5609 18 16.5783 17.5786 17.3284 16.8284C18.0786 16.0783 18.5 15.0609 18.5 14V11C18.5 10.7348 18.3946 10.4804 18.2071 10.2929C18.0196 10.1054 17.7652 10 17.5 10H3.5ZM5.5 8V5C5.5 3.67392 6.02678 2.40215 6.96447 1.46447C7.90215 0.526784 9.17392 0 10.5 0C11.8261 0 13.0979 0.526784 14.0355 1.46447C14.9732 2.40215 15.5 3.67392 15.5 5V8H17.5C18.2956 8 19.0587 8.31607 19.6213 8.87868C20.1839 9.44129 20.5 10.2044 20.5 11V14C20.5 15.5913 19.8679 17.1174 18.7426 18.2426C17.6174 19.3679 16.0913 20 14.5 20H6.5C4.9087 20 3.38258 19.3679 2.25736 18.2426C1.13214 17.1174 0.5 15.5913 0.5 14L0.5 11C0.5 10.2044 0.81607 9.44129 1.37868 8.87868C1.94129 8.31607 2.70435 8 3.5 8H5.5ZM7.5 8H13.5V5C13.5 4.20435 13.1839 3.44129 12.6213 2.87868C12.0587 2.31607 11.2956 2 10.5 2C9.70435 2 8.94129 2.31607 8.37868 2.87868C7.81607 3.44129 7.5 4.20435 7.5 5V8Z" fill="white"/>
</svg>
                                </div> 
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner 3 -->
        <div id="banner3" class="mt-16">
            <div class="flex items-center">
                <img class="mx-auto" src="{{ asset('images/banner-3.png') }}" alt="banner 3">
            </div>
        </div>
        <!-- Phone -->
        <div id="phone" class="px-14 my-8">
            <div class="grid grid-cols-4 gap-6">
                <div class="bg-white rounded-lg px-4">
                    <img class="mx-auto py-4" src="{{ asset('images/phone-1.png') }}" alt="Air Pod logo">
                    <!-- Product Details  -->
                    <div class="py-3">
                        <h1 class="card-title">Apple Airpod with Charging Case</h1>
                        <div class="flex items-center">
                            <span class="card-curr-price"><b>N140,000</b></span>
                            <span class="card-prev-price"><b>N180,000</b></span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex mr-4">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                            </div>
                            <div class="card-reviews">140 Reviews</div>
                        </div>
                        <span class="flex card-curr-price"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.93408 6.64286H12.5357" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M5.93408 9.31318H9.79123" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M12.8282 21.3916C13.4029 21.3916 13.8688 20.9257 13.8688 20.351C13.8688 19.7762 13.4029 19.3104 12.8282 19.3104C12.2535 19.3104 11.7876 19.7762 11.7876 20.351C11.7876 20.9257 12.2535 21.3916 12.8282 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M19.9689 21.3916C20.5436 21.3916 21.0095 20.9257 21.0095 20.351C21.0095 19.7762 20.5436 19.3104 19.9689 19.3104C19.3942 19.3104 18.9283 19.7762 18.9283 20.351C18.9283 20.9257 19.3942 21.3916 19.9689 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M11.788 20.3796H11.1921C11.1716 20.3796 11.152 20.3714 11.1375 20.357C11.123 20.3425 11.1148 20.3228 11.1148 20.3023V14.8242C11.1148 14.8037 11.123 14.7841 11.1375 14.7696C11.152 14.7551 11.1716 14.7469 11.1921 14.7469H19.4484C19.5066 14.7469 19.564 14.7601 19.6164 14.7854C19.6688 14.8107 19.7148 14.8475 19.7509 14.8931L21.7853 17.4579C21.8395 17.5261 21.869 17.6107 21.869 17.6979V20.3024C21.869 20.3125 21.867 20.3226 21.8631 20.332C21.8592 20.3413 21.8535 20.3498 21.8463 20.357C21.8392 20.3642 21.8306 20.3699 21.8213 20.3738C21.8119 20.3776 21.8018 20.3796 21.7917 20.3796H21.0097" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M18.9286 20.3796H13.8688" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M17.4836 14.747V20.3509" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
</svg> N500</span>
                        <div>
                            <button class="mx-auto relative top-8 btn-yus rounded-full w-2/3 flex flex-row justify-center items-center py-2 text-white">
                                <div class="card-bag-label">
                                    Add to Bag 
                                </div>
                                <div class="ml-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.5 10C3.23478 10 2.98043 10.1054 2.79289 10.2929C2.60536 10.4804 2.5 10.7348 2.5 11V14C2.5 15.0609 2.92143 16.0783 3.67157 16.8284C4.42172 17.5786 5.43913 18 6.5 18H14.5C15.5609 18 16.5783 17.5786 17.3284 16.8284C18.0786 16.0783 18.5 15.0609 18.5 14V11C18.5 10.7348 18.3946 10.4804 18.2071 10.2929C18.0196 10.1054 17.7652 10 17.5 10H3.5ZM5.5 8V5C5.5 3.67392 6.02678 2.40215 6.96447 1.46447C7.90215 0.526784 9.17392 0 10.5 0C11.8261 0 13.0979 0.526784 14.0355 1.46447C14.9732 2.40215 15.5 3.67392 15.5 5V8H17.5C18.2956 8 19.0587 8.31607 19.6213 8.87868C20.1839 9.44129 20.5 10.2044 20.5 11V14C20.5 15.5913 19.8679 17.1174 18.7426 18.2426C17.6174 19.3679 16.0913 20 14.5 20H6.5C4.9087 20 3.38258 19.3679 2.25736 18.2426C1.13214 17.1174 0.5 15.5913 0.5 14L0.5 11C0.5 10.2044 0.81607 9.44129 1.37868 8.87868C1.94129 8.31607 2.70435 8 3.5 8H5.5ZM7.5 8H13.5V5C13.5 4.20435 13.1839 3.44129 12.6213 2.87868C12.0587 2.31607 11.2956 2 10.5 2C9.70435 2 8.94129 2.31607 8.37868 2.87868C7.81607 3.44129 7.5 4.20435 7.5 5V8Z" fill="white"/>
</svg>
                                </div> 
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg px-4">
                    <img class="mx-auto py-4" src="{{ asset('images/phone-2.png') }}" alt="Air Pod logo">
                    <!-- Product Details  -->
                    <div class="py-3">
                        <h1 class="card-title">Apple Airpod with Charging Case</h1>
                        <div class="flex items-center">
                            <span class="card-curr-price"><b>N140,000</b></span>
                            <span class="card-prev-price"><b>N180,000</b></span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex mr-4">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                            </div>
                            <div class="card-reviews">140 Reviews</div>
                        </div>
                        <span class="flex card-curr-price"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.93408 6.64286H12.5357" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M5.93408 9.31318H9.79123" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M12.8282 21.3916C13.4029 21.3916 13.8688 20.9257 13.8688 20.351C13.8688 19.7762 13.4029 19.3104 12.8282 19.3104C12.2535 19.3104 11.7876 19.7762 11.7876 20.351C11.7876 20.9257 12.2535 21.3916 12.8282 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M19.9689 21.3916C20.5436 21.3916 21.0095 20.9257 21.0095 20.351C21.0095 19.7762 20.5436 19.3104 19.9689 19.3104C19.3942 19.3104 18.9283 19.7762 18.9283 20.351C18.9283 20.9257 19.3942 21.3916 19.9689 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M11.788 20.3796H11.1921C11.1716 20.3796 11.152 20.3714 11.1375 20.357C11.123 20.3425 11.1148 20.3228 11.1148 20.3023V14.8242C11.1148 14.8037 11.123 14.7841 11.1375 14.7696C11.152 14.7551 11.1716 14.7469 11.1921 14.7469H19.4484C19.5066 14.7469 19.564 14.7601 19.6164 14.7854C19.6688 14.8107 19.7148 14.8475 19.7509 14.8931L21.7853 17.4579C21.8395 17.5261 21.869 17.6107 21.869 17.6979V20.3024C21.869 20.3125 21.867 20.3226 21.8631 20.332C21.8592 20.3413 21.8535 20.3498 21.8463 20.357C21.8392 20.3642 21.8306 20.3699 21.8213 20.3738C21.8119 20.3776 21.8018 20.3796 21.7917 20.3796H21.0097" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M18.9286 20.3796H13.8688" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M17.4836 14.747V20.3509" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
</svg> N500</span>
                        <div>
                            <button class="mx-auto relative top-8 btn-yus rounded-full w-2/3 flex flex-row justify-center items-center py-2 text-white">
                                <div class="card-bag-label">
                                    Add to Bag 
                                </div>
                                <div class="ml-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.5 10C3.23478 10 2.98043 10.1054 2.79289 10.2929C2.60536 10.4804 2.5 10.7348 2.5 11V14C2.5 15.0609 2.92143 16.0783 3.67157 16.8284C4.42172 17.5786 5.43913 18 6.5 18H14.5C15.5609 18 16.5783 17.5786 17.3284 16.8284C18.0786 16.0783 18.5 15.0609 18.5 14V11C18.5 10.7348 18.3946 10.4804 18.2071 10.2929C18.0196 10.1054 17.7652 10 17.5 10H3.5ZM5.5 8V5C5.5 3.67392 6.02678 2.40215 6.96447 1.46447C7.90215 0.526784 9.17392 0 10.5 0C11.8261 0 13.0979 0.526784 14.0355 1.46447C14.9732 2.40215 15.5 3.67392 15.5 5V8H17.5C18.2956 8 19.0587 8.31607 19.6213 8.87868C20.1839 9.44129 20.5 10.2044 20.5 11V14C20.5 15.5913 19.8679 17.1174 18.7426 18.2426C17.6174 19.3679 16.0913 20 14.5 20H6.5C4.9087 20 3.38258 19.3679 2.25736 18.2426C1.13214 17.1174 0.5 15.5913 0.5 14L0.5 11C0.5 10.2044 0.81607 9.44129 1.37868 8.87868C1.94129 8.31607 2.70435 8 3.5 8H5.5ZM7.5 8H13.5V5C13.5 4.20435 13.1839 3.44129 12.6213 2.87868C12.0587 2.31607 11.2956 2 10.5 2C9.70435 2 8.94129 2.31607 8.37868 2.87868C7.81607 3.44129 7.5 4.20435 7.5 5V8Z" fill="white"/>
</svg>
                                </div> 
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg px-4">
                    <img class="mx-auto py-4" src="{{ asset('images/phone-3.png') }}" alt="Air Pod logo">
                    <!-- Product Details  -->
                    <div class="py-3">
                        <h1 class="card-title">Apple Airpod with Charging Case</h1>
                        <div class="flex items-center">
                            <span class="card-curr-price"><b>N140,000</b></span>
                            <span class="card-prev-price"><b>N180,000</b></span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex mr-4">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                            </div>
                            <div class="card-reviews">140 Reviews</div>
                        </div>
                        <span class="flex card-curr-price"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.93408 6.64286H12.5357" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M5.93408 9.31318H9.79123" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M12.8282 21.3916C13.4029 21.3916 13.8688 20.9257 13.8688 20.351C13.8688 19.7762 13.4029 19.3104 12.8282 19.3104C12.2535 19.3104 11.7876 19.7762 11.7876 20.351C11.7876 20.9257 12.2535 21.3916 12.8282 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M19.9689 21.3916C20.5436 21.3916 21.0095 20.9257 21.0095 20.351C21.0095 19.7762 20.5436 19.3104 19.9689 19.3104C19.3942 19.3104 18.9283 19.7762 18.9283 20.351C18.9283 20.9257 19.3942 21.3916 19.9689 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M11.788 20.3796H11.1921C11.1716 20.3796 11.152 20.3714 11.1375 20.357C11.123 20.3425 11.1148 20.3228 11.1148 20.3023V14.8242C11.1148 14.8037 11.123 14.7841 11.1375 14.7696C11.152 14.7551 11.1716 14.7469 11.1921 14.7469H19.4484C19.5066 14.7469 19.564 14.7601 19.6164 14.7854C19.6688 14.8107 19.7148 14.8475 19.7509 14.8931L21.7853 17.4579C21.8395 17.5261 21.869 17.6107 21.869 17.6979V20.3024C21.869 20.3125 21.867 20.3226 21.8631 20.332C21.8592 20.3413 21.8535 20.3498 21.8463 20.357C21.8392 20.3642 21.8306 20.3699 21.8213 20.3738C21.8119 20.3776 21.8018 20.3796 21.7917 20.3796H21.0097" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M18.9286 20.3796H13.8688" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M17.4836 14.747V20.3509" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
</svg> N500</span>
                        <div>
                            <button class="mx-auto relative top-8 btn-yus rounded-full w-2/3 flex flex-row justify-center items-center py-2 text-white">
                                <div class="card-bag-label">
                                    Add to Bag 
                                </div>
                                <div class="ml-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.5 10C3.23478 10 2.98043 10.1054 2.79289 10.2929C2.60536 10.4804 2.5 10.7348 2.5 11V14C2.5 15.0609 2.92143 16.0783 3.67157 16.8284C4.42172 17.5786 5.43913 18 6.5 18H14.5C15.5609 18 16.5783 17.5786 17.3284 16.8284C18.0786 16.0783 18.5 15.0609 18.5 14V11C18.5 10.7348 18.3946 10.4804 18.2071 10.2929C18.0196 10.1054 17.7652 10 17.5 10H3.5ZM5.5 8V5C5.5 3.67392 6.02678 2.40215 6.96447 1.46447C7.90215 0.526784 9.17392 0 10.5 0C11.8261 0 13.0979 0.526784 14.0355 1.46447C14.9732 2.40215 15.5 3.67392 15.5 5V8H17.5C18.2956 8 19.0587 8.31607 19.6213 8.87868C20.1839 9.44129 20.5 10.2044 20.5 11V14C20.5 15.5913 19.8679 17.1174 18.7426 18.2426C17.6174 19.3679 16.0913 20 14.5 20H6.5C4.9087 20 3.38258 19.3679 2.25736 18.2426C1.13214 17.1174 0.5 15.5913 0.5 14L0.5 11C0.5 10.2044 0.81607 9.44129 1.37868 8.87868C1.94129 8.31607 2.70435 8 3.5 8H5.5ZM7.5 8H13.5V5C13.5 4.20435 13.1839 3.44129 12.6213 2.87868C12.0587 2.31607 11.2956 2 10.5 2C9.70435 2 8.94129 2.31607 8.37868 2.87868C7.81607 3.44129 7.5 4.20435 7.5 5V8Z" fill="white"/>
</svg>
                                </div> 
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg px-4">
                    <img class="mx-auto py-4" src="{{ asset('images/phone-4.png') }}" alt="Air Pod logo">
                    <!-- Product Details  -->
                    <div class="py-3">
                        <h1 class="card-title">Apple Airpod with Charging Case</h1>
                        <div class="flex items-center">
                            <span class="card-curr-price"><b>N140,000</b></span>
                            <span class="card-prev-price"><b>N180,000</b></span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex mr-4">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                                <img class="" src="{{ asset('images/star.png') }}" alt="Star logo">
                            </div>
                            <div class="card-reviews">140 Reviews</div>
                        </div>
                        <span class="flex card-curr-price"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.93408 6.64286H12.5357" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M5.93408 9.31318H9.79123" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M12.8282 21.3916C13.4029 21.3916 13.8688 20.9257 13.8688 20.351C13.8688 19.7762 13.4029 19.3104 12.8282 19.3104C12.2535 19.3104 11.7876 19.7762 11.7876 20.351C11.7876 20.9257 12.2535 21.3916 12.8282 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M19.9689 21.3916C20.5436 21.3916 21.0095 20.9257 21.0095 20.351C21.0095 19.7762 20.5436 19.3104 19.9689 19.3104C19.3942 19.3104 18.9283 19.7762 18.9283 20.351C18.9283 20.9257 19.3942 21.3916 19.9689 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M11.788 20.3796H11.1921C11.1716 20.3796 11.152 20.3714 11.1375 20.357C11.123 20.3425 11.1148 20.3228 11.1148 20.3023V14.8242C11.1148 14.8037 11.123 14.7841 11.1375 14.7696C11.152 14.7551 11.1716 14.7469 11.1921 14.7469H19.4484C19.5066 14.7469 19.564 14.7601 19.6164 14.7854C19.6688 14.8107 19.7148 14.8475 19.7509 14.8931L21.7853 17.4579C21.8395 17.5261 21.869 17.6107 21.869 17.6979V20.3024C21.869 20.3125 21.867 20.3226 21.8631 20.332C21.8592 20.3413 21.8535 20.3498 21.8463 20.357C21.8392 20.3642 21.8306 20.3699 21.8213 20.3738C21.8119 20.3776 21.8018 20.3796 21.7917 20.3796H21.0097" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M18.9286 20.3796H13.8688" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M17.4836 14.747V20.3509" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/>
</svg> N500</span>
                        <div>
                            <button class="mx-auto relative top-8 btn-yus rounded-full w-2/3 flex flex-row justify-center items-center py-2 text-white">
                                <div class="card-bag-label">
                                    Add to Bag 
                                </div>
                                <div class="ml-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.5 10C3.23478 10 2.98043 10.1054 2.79289 10.2929C2.60536 10.4804 2.5 10.7348 2.5 11V14C2.5 15.0609 2.92143 16.0783 3.67157 16.8284C4.42172 17.5786 5.43913 18 6.5 18H14.5C15.5609 18 16.5783 17.5786 17.3284 16.8284C18.0786 16.0783 18.5 15.0609 18.5 14V11C18.5 10.7348 18.3946 10.4804 18.2071 10.2929C18.0196 10.1054 17.7652 10 17.5 10H3.5ZM5.5 8V5C5.5 3.67392 6.02678 2.40215 6.96447 1.46447C7.90215 0.526784 9.17392 0 10.5 0C11.8261 0 13.0979 0.526784 14.0355 1.46447C14.9732 2.40215 15.5 3.67392 15.5 5V8H17.5C18.2956 8 19.0587 8.31607 19.6213 8.87868C20.1839 9.44129 20.5 10.2044 20.5 11V14C20.5 15.5913 19.8679 17.1174 18.7426 18.2426C17.6174 19.3679 16.0913 20 14.5 20H6.5C4.9087 20 3.38258 19.3679 2.25736 18.2426C1.13214 17.1174 0.5 15.5913 0.5 14L0.5 11C0.5 10.2044 0.81607 9.44129 1.37868 8.87868C1.94129 8.31607 2.70435 8 3.5 8H5.5ZM7.5 8H13.5V5C13.5 4.20435 13.1839 3.44129 12.6213 2.87868C12.0587 2.31607 11.2956 2 10.5 2C9.70435 2 8.94129 2.31607 8.37868 2.87868C7.81607 3.44129 7.5 4.20435 7.5 5V8Z" fill="white"/>
</svg>
                                </div> 
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- More items -->
        <div class="mt-16 mb-8 flex justify-center">
            <button class="mx-auto btn-yus-conti-shopping rounded-full w-1/6 text-lg py-2 text-white">Shop all Items</button>
        </div>
        <!-- Trust  -->
        <div class="mt-16 px-14">
            <div class="grid grid-cols-4 gap-6">
                <div class="flex justify-center items-center">
                    <!-- <img class="py-4" src="{{ asset('images/secured.png') }}" alt="Secured Payment"> -->
                    <svg width="132" height="132" viewBox="0 0 132 132" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M74.7815 111.222H20.4176C19.3726 111.222 18.3703 110.806 17.6314 110.068C16.8924 109.329 16.4773 108.326 16.4773 107.281V24.537C16.4773 23.4919 16.8924 22.4897 17.6314 21.7507C18.3703 21.0118 19.3726 20.5966 20.4176 20.5966H111.401C112.446 20.5966 113.448 21.0118 114.187 21.7507C114.926 22.4897 115.341 23.4919 115.341 24.537V63.1025" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M32.5924 36.4865H68.8515" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M32.5924 51.1534H53.7775" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M102.869 75.1246L102.107 74.6867L101.344 75.1246C98.6841 76.6529 95.727 77.5931 92.6726 77.8819C89.6181 78.1707 86.5372 77.8014 83.6375 76.7989V94.7634C83.6375 97.0465 84.0872 99.3071 84.9609 101.416C85.8346 103.526 87.1152 105.442 88.7295 107.056L98.1021 116.429C98.628 116.955 99.2522 117.372 99.9393 117.657C100.626 117.942 101.363 118.088 102.106 118.088V118.088C102.85 118.088 103.587 117.942 104.274 117.657C104.961 117.372 105.585 116.955 106.111 116.429L115.483 107.057C118.744 103.796 120.575 99.3743 120.575 94.7634V76.7991C117.676 77.8016 114.595 78.1709 111.54 77.882C108.486 77.5932 105.529 76.6529 102.869 75.1246V75.1246Z" stroke="#F37022" stroke-width="5.06993" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="ml-3">
                        <span class="trust-title">100%</span> <br>
                        <span class="trust-label">
                            Secured <br>
                            Payment
                        </span>
                    </div>
                </div>
                <div class="flex items-center">
                    <!-- <img class="py-4" src="{{ asset('images/support.png') }}" alt="Customer Service"> -->
                    <svg width="132" height="132" viewBox="0 0 132 132" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M35.5012 93.8388V38.4763C35.5012 31.8021 38.1525 25.4013 42.8718 20.682C47.5912 15.9626 53.992 13.3113 60.6661 13.3113H71.1514C77.8256 13.3113 84.2264 15.9626 88.9457 20.682C93.6651 25.4013 96.3163 31.8021 96.3163 38.4763V90.9268C96.3163 97.0624 93.879 102.947 89.5405 107.285C85.2019 111.624 79.3176 114.061 73.182 114.061V114.061" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M35.5012 49.3815H32.3556C27.4056 49.3815 22.6584 51.3479 19.1582 54.848C15.6581 58.3482 13.6917 63.0954 13.6917 68.0454V75.1754C13.6917 80.1253 15.6581 84.8726 19.1582 88.3727C22.6584 91.8729 27.4056 93.8393 32.3556 93.8393H35.5012" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M96.317 49.3815H99.4626C104.413 49.3815 109.16 51.3479 112.66 54.848C116.16 58.3482 118.126 63.0954 118.126 68.0454V75.1754C118.126 80.1253 116.16 84.8726 112.66 88.3727C109.16 91.8729 104.413 93.8393 99.4626 93.8393H96.317" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M24.5972 62.6457V80.5756" stroke="#F37022" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M107.221 62.6457V80.5756" stroke="#F37022" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M35.5012 47.5466C35.5012 40.8724 38.1525 34.4716 42.8718 29.7523C47.5912 25.0329 53.992 22.3817 60.6661 22.3817H71.1514C77.8256 22.3817 84.2264 25.0329 88.9457 29.7523C93.6651 34.4716 96.3163 40.8724 96.3163 47.5466" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M68.645 109.616H49.8394C47.3847 109.616 45.3948 111.606 45.3948 114.061C45.3948 116.516 47.3847 118.506 49.8394 118.506H68.645C71.0997 118.506 73.0896 116.516 73.0896 114.061C73.0896 111.606 71.0997 109.616 68.645 109.616Z" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/>
                    </svg>

                    <div class="ml-3">
                        <span class="trust-title">24/7</span> <br>
                        <span class="trust-label">
                            Customer <br>
                            Service
                        </span>
                    </div>
                </div>
                <div class="flex items-center">
                    <!-- <img class="py-4" src="{{ asset('images/delivery.png') }}" alt="Delivery"> -->
                    <svg width="132" height="132" viewBox="0 0 132 132" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32.5924 36.4855H68.8515" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M32.5924 51.1516H53.7775" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M47.8248 111.222H20.4176C19.3726 111.222 18.3703 110.806 17.6314 110.068C16.8924 109.329 16.4773 108.326 16.4773 107.281V24.537C16.4773 23.4919 16.8924 22.4897 17.6314 21.7507C18.3703 21.0118 19.3726 20.5966 20.4176 20.5966H111.401C112.446 20.5966 113.448 21.0118 114.187 21.7507C114.926 22.4897 115.341 23.4919 115.341 24.537V69.621" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M70.4579 117.491C73.6144 117.491 76.1733 114.932 76.1733 111.776C76.1733 108.619 73.6144 106.06 70.4579 106.06C67.3013 106.06 64.7424 108.619 64.7424 111.776C64.7424 114.932 67.3013 117.491 70.4579 117.491Z" stroke="#F37022" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M109.678 117.491C112.835 117.491 115.393 114.932 115.393 111.776C115.393 108.619 112.835 106.06 109.678 106.06C106.521 106.06 103.963 108.619 103.963 111.776C103.963 114.932 106.521 117.491 109.678 117.491Z" stroke="#F37022" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M103.963 80.9965V94.3442C103.963 94.9066 104.186 95.446 104.584 95.8437C104.981 96.2415 105.521 96.4649 106.083 96.4649H119.979" stroke="#F37022" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M64.7451 111.933H61.4719C61.3594 111.933 61.2515 111.889 61.1719 111.809C61.0923 111.73 61.0476 111.622 61.0476 111.509V81.4208C61.0476 81.3083 61.0923 81.2004 61.1719 81.1208C61.2515 81.0412 61.3594 80.9965 61.4719 80.9965H106.819C107.139 80.9965 107.454 81.0687 107.742 81.2077C108.03 81.3467 108.282 81.549 108.481 81.7993L119.654 95.886C119.952 96.261 120.114 96.7256 120.114 97.2042V111.509C120.114 111.565 120.103 111.62 120.081 111.672C120.06 111.723 120.029 111.77 119.989 111.809C119.95 111.849 119.903 111.88 119.852 111.901C119.8 111.923 119.745 111.934 119.689 111.934H115.395" stroke="#F37022" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M103.964 111.934H76.1733" stroke="#F37022" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/>
                    </svg>
                    <div class="ml-3">
                        <span class="trust-title">24/7</span> <br>
                        <span class="trust-label">
                            Free <br>
                            Delivery
                        </span>
                    </div>
                </div>
                <div class="flex items-center">
                    <!-- <img class="py-4" src="{{ asset('images/return.png') }}" alt="Return Policy"> -->
                    <svg width="132" height="132" viewBox="0 0 132 132" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M67.7395 27.8289C46.5058 27.8289 29.2925 45.0422 29.2925 66.2759C29.2925 76.9461 33.6392 86.601 40.6584 93.5667" stroke="black" stroke-width="5.06993" stroke-linecap="round"/>
                        <path d="M60.4166 43.9395L71.4015 27.4622L54.9242 16.4773" stroke="#F37022" stroke-width="5.06993" stroke-linecap="round"/>
                        <path d="M62.9792 103.82C84.2129 103.82 101.426 86.6065 101.426 65.3728C101.426 54.7026 97.0795 45.0476 90.0603 38.082" stroke="black" stroke-width="5.06993" stroke-linecap="round"/>
                        <path d="M71.3997 87.8784L60.4149 104.356L76.8921 115.341" stroke="#F37022" stroke-width="5.06993" stroke-linecap="round"/>
                    </svg>
                    <div class="ml-3">
                        <span class="trust-title">30 Days</span> <br>
                        <span class="trust-label">
                            Return <br>
                            Policy
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer  -->
        <div id="footer" class="mt-16 py-8">
            <div class="grid grid-cols-4 gap-6 px-14">
                <div class="col-span-3">
                    <div>
                        <img class="py-4" src="{{ asset('images/logo-2.png') }}" alt="Kahioja Logo">
                    </div>
                    <div class="w-1/2 my-8">
                        <p>
                            Kahioja is an ecommerce platform that serve local market across Africa. We aim to give access to myriad of products on our platform and help businesses grow whilst making sales and delivery as ease. 
                        </p>
                    </div>
                    <div>
                        <p>
                            Copyright &copy; 2021. All Rights Reserved By Kahioja
                        </p>
                    </div>
                </div>
                <div class="col-span-1">
                    <h1>Useful Links</h1>
                    <div class="mt-3">
                        <ul id="footer-nav">
                            <li class="py-2">
                                <a href="#">All Categories</a>
                            </li>
                            <li class="py-2">
                               <a href="">Track Orders</a>
                            </li>
                            <li class="py-2">
                                <a href="">Privacy &amp; Security</a>
                            </li>
                            <li class="py-2">
                               <a href="">Terms &amp; Policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex mt-2">
                        <img class="" src="{{ asset('images/instagram.png') }}" alt="Instagram Logo">
                        <img class="ml-3" src="{{ asset('images/facebook.png') }}" alt="Facebook Logo">
                        <img class="ml-3" src="{{ asset('images/twitter.png') }}" alt="Twitter Logo">
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
