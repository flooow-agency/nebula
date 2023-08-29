<?php
$logo = get_field('header_logo', 'options');
$logo_dark = get_field('header_logo_dark', 'options');
$btn = get_field('header_button', 'options');


?>
<header class="header">
    <div class="container">
        <div class="header__content">
            <?php if ($logo) : ?>
                <div class="header__logo">
                    <a href="<?php echo get_home_url() ?>">
                        <img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['title']; ?>">
                        <img class="dark" src="<?php echo $logo_dark['url'] ?>" alt="<?php echo $logo_dark['title']; ?>">
                    </a>
                </div>
            <?php endif; ?>
            <div class="header__right">
                <div class="header__rightMenu">
                    <?php wp_nav_menu(array('menu' => 'header-menu'));
                    ?></div>
                <?php if ($btn) : ?>
                    <div class="header-btn"><a class="btn btn--blue btn--small font--weight--700" href="<?php echo $btn['url']; ?>"><?php echo $btn['title']; ?></a></div>
                <?php endif; ?>
                <div class="header_switcher">
                    <svg class="light on" viewBox="0 0 85 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M79.2065 3.00487L81.0875 4.21554C83.3752 5.68795 84.7578 8.22205 84.7578 10.9426V30.3483C84.7578 32.9304 83.5116 35.3536 81.4114 36.8556L79.0918 38.5144C78.3919 39.0149 77.6158 39.3993 76.7935 39.6526L73.3303 40.7195C72.3152 41.0322 71.2481 41.1396 70.191 41.0355L42.5004 38.3086H8.72315C4.30488 38.3086 0.723152 34.7269 0.723152 30.3086V12.174C0.723152 7.7557 4.30488 4.17398 8.72315 4.17398H42.5004L70.4223 0.966018C71.329 0.861837 72.247 0.913603 73.1363 1.11907L76.6777 1.93729C77.5758 2.1448 78.4314 2.50598 79.2065 3.00487Z" fill="url(#paint0_linear_1643_3625)" />
                        <path d="M42.5005 4.17398L70.6586 0.938879C71.409 0.852658 72.1687 0.8955 72.9047 1.06555C75.908 1.75944 78.0352 4.43407 78.0352 7.51647V34.1366C78.0352 37.1882 76.0455 39.8831 73.1292 40.7815C72.2469 41.0532 71.3194 41.1466 70.4008 41.0561L42.5005 38.3086H8.72327C4.305 38.3086 0.723274 34.7269 0.723274 30.3086V12.174C0.723274 7.7557 4.305 4.17398 8.72327 4.17398H42.5005Z" fill="url(#paint1_radial_1643_3625)" />
                        <path d="M42.5576 4.67071L42.5291 4.67398H42.5005H8.72327C4.58115 4.67398 1.22327 8.03184 1.22327 12.174V30.3086C1.22327 34.4507 4.58114 37.8086 8.72327 37.8086H42.5005H42.5251L42.5495 37.811L70.4498 40.5586C71.3024 40.6425 72.1632 40.5559 72.982 40.3036C75.6885 39.4698 77.5352 36.9687 77.5352 34.1366V7.51647C77.5352 4.66685 75.5687 2.1942 72.7922 1.55272C72.1118 1.39551 71.4094 1.3559 70.7157 1.43561L42.5576 4.67071Z" stroke="#FAFAFA" stroke-opacity="0.5" />
                        <g filter="url(#filter0_ii_1643_3625)">
                            <ellipse cx="17.0496" cy="21" rx="3.84158" ry="4" fill="#CC03DF" />
                        </g>
                        <path d="M45.8613 16.5468C46.2955 16.5073 46.5191 16.4809 46.9664 16.4414C46.9664 19.708 46.9664 21.3413 46.9664 24.6079C48.7425 24.7396 49.6371 24.8055 51.4264 24.9504C51.4264 25.4114 51.4264 25.6353 51.4264 26.0831C49.1898 25.846 48.0847 25.7407 45.8613 25.5299C45.8613 21.934 45.8613 20.1427 45.8613 16.5468Z" fill="#98A9D8" />
                        <path d="M54.6627 26.1767C54.2417 25.9396 53.8733 25.6234 53.5707 25.2283C53.2682 24.8331 53.0313 24.3721 52.8603 23.8189C52.6893 23.2657 52.6104 22.6598 52.6104 21.988C52.6104 19.5381 52.6104 18.3131 52.6104 15.8763C53.0445 15.8368 53.2682 15.8105 53.7155 15.771C53.7155 18.2341 53.7155 19.4591 53.7155 21.9222C53.7155 22.8969 53.926 23.6872 54.3601 24.3194C54.7943 24.9517 55.3731 25.2941 56.0836 25.3468C56.794 25.3995 57.3729 25.1361 57.8202 24.5434C58.2675 23.9506 58.478 23.0945 58.478 22.0012C58.478 19.3142 58.478 17.9838 58.478 15.2968C58.9121 15.2573 59.1358 15.2309 59.5831 15.1914C59.5831 17.9706 59.5831 19.3537 59.5831 22.1198C59.5831 23.6213 59.2673 24.7936 58.6358 25.5971C58.0044 26.4006 57.1492 26.7299 56.0836 26.6245C55.5705 26.5718 55.0969 26.4269 54.6627 26.1767Z" fill="#98A9D8" />
                        <path d="M64.8461 22.2648C64.8329 22.2648 64.8329 22.2648 64.8329 22.2648C63.8462 24.2932 63.3463 25.268 62.3464 27.1383C61.8202 27.0857 61.557 27.0593 61.0439 27.0066C62.2675 24.7279 62.8858 23.5293 64.1093 21.0135C62.899 18.4977 62.2938 17.299 61.0834 15.0203C61.5965 14.9676 61.8465 14.9413 62.3596 14.8886C63.3463 16.7722 63.8462 17.7469 64.8329 19.7885C64.8461 19.7885 64.8461 19.7885 64.8592 19.7885C65.8459 17.7074 66.3327 16.6273 67.3194 14.4012C67.8325 14.3486 68.0825 14.3222 68.5956 14.2695C67.3852 17.0883 66.78 18.4318 65.5696 21.0135C66.7932 23.582 67.4115 24.9255 68.635 27.7311C68.1088 27.6784 67.8457 27.652 67.3326 27.5994C66.3327 25.3997 65.8328 24.3328 64.8461 22.2648Z" fill="#98A9D8" />
                        <defs>
                            <filter id="filter0_ii_1643_3625" x="12.208" y="16" width="8.98359" height="9.3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="0.5" dy="0.5" />
                                <feGaussianBlur stdDeviation="0.15" />
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.0784314 0 0 0 0 0.0784314 0 0 0 0 0.0784314 0 0 0 0.55 0" />
                                <feBlend mode="normal" in2="shape" result="effect1_innerShadow_1643_3625" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="-1" dy="-1" />
                                <feGaussianBlur stdDeviation="0.5" />
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.207843 0 0 0 0 0.254902 0 0 0 0 0.32549 0 0 0 0.5 0" />
                                <feBlend mode="normal" in2="effect1_innerShadow_1643_3625" result="effect2_innerShadow_1643_3625" />
                            </filter>
                            <linearGradient id="paint0_linear_1643_3625" x1="80.9162" y1="5.13552" x2="50.1323" y2="52.2174" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" />
                                <stop offset="0.779167" stop-color="#BABABA" />
                            </linearGradient>
                            <radialGradient id="paint1_radial_1643_3625" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(64.5896 15.7124) rotate(162.296) scale(69.5618 26.7417)">
                                <stop stop-color="white" />
                                <stop offset="0.802052" stop-color="#ECECEC" />
                            </radialGradient>
                        </defs>
                    </svg>
                    <svg class="dark" viewBox="0 0 86 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.27399 3.00487L4.39296 4.21554C2.10526 5.68795 0.722656 8.22205 0.722656 10.9426V30.3483C0.722656 32.9304 1.96886 35.3536 4.06909 36.8556L6.38869 38.5144C7.0886 39.0149 7.86468 39.3993 8.68701 39.6526L12.1502 40.7195C13.1652 41.0322 14.2324 41.1396 15.2894 41.0355L42.9801 38.3086H76.7573C81.1756 38.3086 84.7573 34.7269 84.7573 30.3086V12.174C84.7573 7.7557 81.1756 4.17398 76.7573 4.17398H42.9801L15.0582 0.966018C14.1514 0.861837 13.2335 0.913603 12.3442 1.11907L8.80278 1.93729C7.90464 2.1448 7.04912 2.50598 6.27399 3.00487Z" fill="url(#paint0_linear_1643_3629)" />
                        <path d="M42.98 4.17398L14.8219 0.938879C14.0714 0.852658 13.3117 0.8955 12.5757 1.06555C9.57245 1.75944 7.44531 4.43407 7.44531 7.51647V34.1366C7.44531 37.1882 9.43501 39.8831 12.3513 40.7815C13.2335 41.0532 14.161 41.1466 15.0797 41.0561L42.98 38.3086H76.7572C81.1755 38.3086 84.7572 34.7269 84.7572 30.3086V12.174C84.7572 7.7557 81.1755 4.17398 76.7572 4.17398H42.98Z" fill="url(#paint1_radial_1643_3629)" stroke="#495862" stroke-opacity="0.5" />
                        <path d="M20.4636 14.9012C20.4636 19.7831 20.4636 22.2307 20.4636 27.1258C20.0824 27.1652 19.8853 27.1784 19.491 27.2179C17.7429 23.4807 16.8755 21.4674 15.1274 17.1908C15.1143 17.1908 15.1143 17.1908 15.1011 17.1908C15.1011 21.3753 15.1011 23.4676 15.1011 27.6521C14.7331 27.6784 14.5491 27.7048 14.168 27.7311C14.168 22.3491 14.168 19.6515 14.168 14.2695C14.5491 14.309 14.7331 14.3222 15.1143 14.3616C16.8623 18.7699 17.7429 20.8227 19.5041 24.6782C19.5173 24.6782 19.5173 24.6782 19.5304 24.6782C19.5304 20.7305 19.5304 18.7436 19.5304 14.7959C19.8984 14.8354 20.0824 14.8617 20.4636 14.9012Z" fill="#7C8C99" />
                        <path d="M24.4197 26.3735C23.9334 26.1234 23.5128 25.7418 23.1842 25.2418C22.8425 24.7418 22.5796 24.1101 22.3956 23.3864C22.1984 22.6495 22.1064 21.86 22.1064 21.0046C22.1064 20.1493 22.1984 19.3598 22.3956 18.6229C22.5927 17.886 22.8556 17.2675 23.1842 16.7675C23.5259 16.2674 23.9334 15.8858 24.4197 15.6358C24.906 15.3858 25.4317 15.2937 26.01 15.3463C26.5489 15.3989 27.0614 15.5832 27.5346 15.899C28.0078 16.2148 28.4283 16.6096 28.7701 17.0964C29.1118 17.5833 29.3878 18.1623 29.585 18.8334C29.7821 19.5045 29.8872 20.2283 29.8872 20.9915C29.8872 21.7547 29.7821 22.4784 29.585 23.1495C29.3878 23.8206 29.1118 24.3996 28.7701 24.8865C28.4283 25.3734 28.0209 25.7813 27.5346 26.0971C27.0483 26.4129 26.5489 26.5972 26.01 26.6498C25.4317 26.7287 24.906 26.6366 24.4197 26.3735ZM27.1403 24.9655C27.4952 24.7286 27.7975 24.4128 28.0603 24.0312C28.3232 23.6496 28.5204 23.2022 28.6781 22.6758C28.8226 22.1495 28.9015 21.5968 28.9015 21.0046C28.9015 20.4125 28.8226 19.8466 28.6781 19.3335C28.5335 18.8071 28.3232 18.3597 28.0603 17.9781C27.7975 17.5965 27.4952 17.2938 27.1403 17.057C26.7854 16.8201 26.4043 16.6885 26.01 16.649C25.6683 16.6227 25.3528 16.6754 25.0505 16.7938C24.7351 16.9254 24.4591 17.1096 24.2225 17.3728C23.9859 17.636 23.7888 17.9518 23.6179 18.3202C23.4471 18.6887 23.3156 19.0966 23.2236 19.5572C23.1316 20.0177 23.0922 20.4914 23.0922 21.0046C23.0922 21.6363 23.1579 22.2284 23.3025 22.7811C23.4471 23.3338 23.6442 23.8075 23.8939 24.2022C24.1436 24.597 24.4591 24.8997 24.814 25.1102C25.1688 25.3207 25.5763 25.3997 25.9968 25.3734C26.4043 25.3339 26.7854 25.2023 27.1403 24.9655Z" fill="#7C8C99" />
                        <path d="M33.6471 21.9544H33.634C32.7797 23.5203 32.346 24.3362 31.4916 26.0337C31.0448 26.0731 30.8213 26.0995 30.3613 26.1389C31.4259 23.9809 31.9517 22.9545 33.0163 21.007C31.9648 19.0594 31.4391 18.0331 30.4008 15.875C30.8476 15.9145 31.0579 15.9408 31.5048 15.9803C32.3591 17.6909 32.7797 18.5068 33.634 20.0858C33.6471 20.0858 33.6471 20.0858 33.6603 20.0858C34.5146 18.5463 34.9352 17.8094 35.7763 16.4014C36.2232 16.4408 36.4467 16.4671 36.8804 16.5066C35.8289 18.2041 35.3163 19.0989 34.2649 21.007C35.3295 22.9018 35.8552 23.7966 36.9198 25.481C36.4729 25.5205 36.2495 25.5468 35.7895 25.5863C34.922 24.2046 34.5015 23.4808 33.6471 21.9544Z" fill="#7C8C99" />
                        <g filter="url(#filter0_ii_1643_3629)">
                            <circle cx="74" cy="21" r="4" fill="#E1B518" />
                        </g>
                        <defs>
                            <filter id="filter0_ii_1643_3629" x="69" y="16" width="9.3" height="9.3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="0.5" dy="0.5" />
                                <feGaussianBlur stdDeviation="0.15" />
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.0784314 0 0 0 0 0.0784314 0 0 0 0 0.0784314 0 0 0 0.55 0" />
                                <feBlend mode="normal" in2="shape" result="effect1_innerShadow_1643_3629" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="-1" dy="-1" />
                                <feGaussianBlur stdDeviation="0.5" />
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.207843 0 0 0 0 0.254902 0 0 0 0 0.32549 0 0 0 0.5 0" />
                                <feBlend mode="normal" in2="effect1_innerShadow_1643_3629" result="effect2_innerShadow_1643_3629" />
                            </filter>
                            <linearGradient id="paint0_linear_1643_3629" x1="4.56424" y1="5.13552" x2="40.6219" y2="41.1503" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#354153" />
                                <stop offset="0.983002" stop-color="#141414" />
                            </linearGradient>
                            <radialGradient id="paint1_radial_1643_3629" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(20.8909 15.7124) rotate(17.7041) scale(69.5618 70.7935)">
                                <stop stop-color="#141414" />
                                <stop offset="0.802052" stop-color="#354153" />
                            </radialGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>
        <div class="header__mobile">
            <div class="container">
                <?php if ($logo) : ?>
                    <div class="header__mobileLogo">
                        <img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['title']; ?>">
                        <img class="dark" src="<?php echo $logo_dark['url'] ?>" alt="<?php echo $logo_dark['title']; ?>">
                    </div>
                <?php endif; ?>
                <div class="header_switcher">
                    <svg class="light on" viewBox="0 0 85 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M79.2065 3.00487L81.0875 4.21554C83.3752 5.68795 84.7578 8.22205 84.7578 10.9426V30.3483C84.7578 32.9304 83.5116 35.3536 81.4114 36.8556L79.0918 38.5144C78.3919 39.0149 77.6158 39.3993 76.7935 39.6526L73.3303 40.7195C72.3152 41.0322 71.2481 41.1396 70.191 41.0355L42.5004 38.3086H8.72315C4.30488 38.3086 0.723152 34.7269 0.723152 30.3086V12.174C0.723152 7.7557 4.30488 4.17398 8.72315 4.17398H42.5004L70.4223 0.966018C71.329 0.861837 72.247 0.913603 73.1363 1.11907L76.6777 1.93729C77.5758 2.1448 78.4314 2.50598 79.2065 3.00487Z" fill="url(#paint0_linear_1643_3625)" />
                        <path d="M42.5005 4.17398L70.6586 0.938879C71.409 0.852658 72.1687 0.8955 72.9047 1.06555C75.908 1.75944 78.0352 4.43407 78.0352 7.51647V34.1366C78.0352 37.1882 76.0455 39.8831 73.1292 40.7815C72.2469 41.0532 71.3194 41.1466 70.4008 41.0561L42.5005 38.3086H8.72327C4.305 38.3086 0.723274 34.7269 0.723274 30.3086V12.174C0.723274 7.7557 4.305 4.17398 8.72327 4.17398H42.5005Z" fill="url(#paint1_radial_1643_3625)" />
                        <path d="M42.5576 4.67071L42.5291 4.67398H42.5005H8.72327C4.58115 4.67398 1.22327 8.03184 1.22327 12.174V30.3086C1.22327 34.4507 4.58114 37.8086 8.72327 37.8086H42.5005H42.5251L42.5495 37.811L70.4498 40.5586C71.3024 40.6425 72.1632 40.5559 72.982 40.3036C75.6885 39.4698 77.5352 36.9687 77.5352 34.1366V7.51647C77.5352 4.66685 75.5687 2.1942 72.7922 1.55272C72.1118 1.39551 71.4094 1.3559 70.7157 1.43561L42.5576 4.67071Z" stroke="#FAFAFA" stroke-opacity="0.5" />
                        <g filter="url(#filter0_ii_1643_3625)">
                            <ellipse cx="17.0496" cy="21" rx="3.84158" ry="4" fill="#CC03DF" />
                        </g>
                        <path d="M45.8613 16.5468C46.2955 16.5073 46.5191 16.4809 46.9664 16.4414C46.9664 19.708 46.9664 21.3413 46.9664 24.6079C48.7425 24.7396 49.6371 24.8055 51.4264 24.9504C51.4264 25.4114 51.4264 25.6353 51.4264 26.0831C49.1898 25.846 48.0847 25.7407 45.8613 25.5299C45.8613 21.934 45.8613 20.1427 45.8613 16.5468Z" fill="#98A9D8" />
                        <path d="M54.6627 26.1767C54.2417 25.9396 53.8733 25.6234 53.5707 25.2283C53.2682 24.8331 53.0313 24.3721 52.8603 23.8189C52.6893 23.2657 52.6104 22.6598 52.6104 21.988C52.6104 19.5381 52.6104 18.3131 52.6104 15.8763C53.0445 15.8368 53.2682 15.8105 53.7155 15.771C53.7155 18.2341 53.7155 19.4591 53.7155 21.9222C53.7155 22.8969 53.926 23.6872 54.3601 24.3194C54.7943 24.9517 55.3731 25.2941 56.0836 25.3468C56.794 25.3995 57.3729 25.1361 57.8202 24.5434C58.2675 23.9506 58.478 23.0945 58.478 22.0012C58.478 19.3142 58.478 17.9838 58.478 15.2968C58.9121 15.2573 59.1358 15.2309 59.5831 15.1914C59.5831 17.9706 59.5831 19.3537 59.5831 22.1198C59.5831 23.6213 59.2673 24.7936 58.6358 25.5971C58.0044 26.4006 57.1492 26.7299 56.0836 26.6245C55.5705 26.5718 55.0969 26.4269 54.6627 26.1767Z" fill="#98A9D8" />
                        <path d="M64.8461 22.2648C64.8329 22.2648 64.8329 22.2648 64.8329 22.2648C63.8462 24.2932 63.3463 25.268 62.3464 27.1383C61.8202 27.0857 61.557 27.0593 61.0439 27.0066C62.2675 24.7279 62.8858 23.5293 64.1093 21.0135C62.899 18.4977 62.2938 17.299 61.0834 15.0203C61.5965 14.9676 61.8465 14.9413 62.3596 14.8886C63.3463 16.7722 63.8462 17.7469 64.8329 19.7885C64.8461 19.7885 64.8461 19.7885 64.8592 19.7885C65.8459 17.7074 66.3327 16.6273 67.3194 14.4012C67.8325 14.3486 68.0825 14.3222 68.5956 14.2695C67.3852 17.0883 66.78 18.4318 65.5696 21.0135C66.7932 23.582 67.4115 24.9255 68.635 27.7311C68.1088 27.6784 67.8457 27.652 67.3326 27.5994C66.3327 25.3997 65.8328 24.3328 64.8461 22.2648Z" fill="#98A9D8" />
                        <defs>
                            <filter id="filter0_ii_1643_3625" x="12.208" y="16" width="8.98359" height="9.3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="0.5" dy="0.5" />
                                <feGaussianBlur stdDeviation="0.15" />
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.0784314 0 0 0 0 0.0784314 0 0 0 0 0.0784314 0 0 0 0.55 0" />
                                <feBlend mode="normal" in2="shape" result="effect1_innerShadow_1643_3625" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="-1" dy="-1" />
                                <feGaussianBlur stdDeviation="0.5" />
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.207843 0 0 0 0 0.254902 0 0 0 0 0.32549 0 0 0 0.5 0" />
                                <feBlend mode="normal" in2="effect1_innerShadow_1643_3625" result="effect2_innerShadow_1643_3625" />
                            </filter>
                            <linearGradient id="paint0_linear_1643_3625" x1="80.9162" y1="5.13552" x2="50.1323" y2="52.2174" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" />
                                <stop offset="0.779167" stop-color="#BABABA" />
                            </linearGradient>
                            <radialGradient id="paint1_radial_1643_3625" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(64.5896 15.7124) rotate(162.296) scale(69.5618 26.7417)">
                                <stop stop-color="white" />
                                <stop offset="0.802052" stop-color="#ECECEC" />
                            </radialGradient>
                        </defs>
                    </svg>
                    <svg class="dark" viewBox="0 0 86 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.27399 3.00487L4.39296 4.21554C2.10526 5.68795 0.722656 8.22205 0.722656 10.9426V30.3483C0.722656 32.9304 1.96886 35.3536 4.06909 36.8556L6.38869 38.5144C7.0886 39.0149 7.86468 39.3993 8.68701 39.6526L12.1502 40.7195C13.1652 41.0322 14.2324 41.1396 15.2894 41.0355L42.9801 38.3086H76.7573C81.1756 38.3086 84.7573 34.7269 84.7573 30.3086V12.174C84.7573 7.7557 81.1756 4.17398 76.7573 4.17398H42.9801L15.0582 0.966018C14.1514 0.861837 13.2335 0.913603 12.3442 1.11907L8.80278 1.93729C7.90464 2.1448 7.04912 2.50598 6.27399 3.00487Z" fill="url(#paint0_linear_1643_3629)" />
                        <path d="M42.98 4.17398L14.8219 0.938879C14.0714 0.852658 13.3117 0.8955 12.5757 1.06555C9.57245 1.75944 7.44531 4.43407 7.44531 7.51647V34.1366C7.44531 37.1882 9.43501 39.8831 12.3513 40.7815C13.2335 41.0532 14.161 41.1466 15.0797 41.0561L42.98 38.3086H76.7572C81.1755 38.3086 84.7572 34.7269 84.7572 30.3086V12.174C84.7572 7.7557 81.1755 4.17398 76.7572 4.17398H42.98Z" fill="url(#paint1_radial_1643_3629)" stroke="#495862" stroke-opacity="0.5" />
                        <path d="M20.4636 14.9012C20.4636 19.7831 20.4636 22.2307 20.4636 27.1258C20.0824 27.1652 19.8853 27.1784 19.491 27.2179C17.7429 23.4807 16.8755 21.4674 15.1274 17.1908C15.1143 17.1908 15.1143 17.1908 15.1011 17.1908C15.1011 21.3753 15.1011 23.4676 15.1011 27.6521C14.7331 27.6784 14.5491 27.7048 14.168 27.7311C14.168 22.3491 14.168 19.6515 14.168 14.2695C14.5491 14.309 14.7331 14.3222 15.1143 14.3616C16.8623 18.7699 17.7429 20.8227 19.5041 24.6782C19.5173 24.6782 19.5173 24.6782 19.5304 24.6782C19.5304 20.7305 19.5304 18.7436 19.5304 14.7959C19.8984 14.8354 20.0824 14.8617 20.4636 14.9012Z" fill="#7C8C99" />
                        <path d="M24.4197 26.3735C23.9334 26.1234 23.5128 25.7418 23.1842 25.2418C22.8425 24.7418 22.5796 24.1101 22.3956 23.3864C22.1984 22.6495 22.1064 21.86 22.1064 21.0046C22.1064 20.1493 22.1984 19.3598 22.3956 18.6229C22.5927 17.886 22.8556 17.2675 23.1842 16.7675C23.5259 16.2674 23.9334 15.8858 24.4197 15.6358C24.906 15.3858 25.4317 15.2937 26.01 15.3463C26.5489 15.3989 27.0614 15.5832 27.5346 15.899C28.0078 16.2148 28.4283 16.6096 28.7701 17.0964C29.1118 17.5833 29.3878 18.1623 29.585 18.8334C29.7821 19.5045 29.8872 20.2283 29.8872 20.9915C29.8872 21.7547 29.7821 22.4784 29.585 23.1495C29.3878 23.8206 29.1118 24.3996 28.7701 24.8865C28.4283 25.3734 28.0209 25.7813 27.5346 26.0971C27.0483 26.4129 26.5489 26.5972 26.01 26.6498C25.4317 26.7287 24.906 26.6366 24.4197 26.3735ZM27.1403 24.9655C27.4952 24.7286 27.7975 24.4128 28.0603 24.0312C28.3232 23.6496 28.5204 23.2022 28.6781 22.6758C28.8226 22.1495 28.9015 21.5968 28.9015 21.0046C28.9015 20.4125 28.8226 19.8466 28.6781 19.3335C28.5335 18.8071 28.3232 18.3597 28.0603 17.9781C27.7975 17.5965 27.4952 17.2938 27.1403 17.057C26.7854 16.8201 26.4043 16.6885 26.01 16.649C25.6683 16.6227 25.3528 16.6754 25.0505 16.7938C24.7351 16.9254 24.4591 17.1096 24.2225 17.3728C23.9859 17.636 23.7888 17.9518 23.6179 18.3202C23.4471 18.6887 23.3156 19.0966 23.2236 19.5572C23.1316 20.0177 23.0922 20.4914 23.0922 21.0046C23.0922 21.6363 23.1579 22.2284 23.3025 22.7811C23.4471 23.3338 23.6442 23.8075 23.8939 24.2022C24.1436 24.597 24.4591 24.8997 24.814 25.1102C25.1688 25.3207 25.5763 25.3997 25.9968 25.3734C26.4043 25.3339 26.7854 25.2023 27.1403 24.9655Z" fill="#7C8C99" />
                        <path d="M33.6471 21.9544H33.634C32.7797 23.5203 32.346 24.3362 31.4916 26.0337C31.0448 26.0731 30.8213 26.0995 30.3613 26.1389C31.4259 23.9809 31.9517 22.9545 33.0163 21.007C31.9648 19.0594 31.4391 18.0331 30.4008 15.875C30.8476 15.9145 31.0579 15.9408 31.5048 15.9803C32.3591 17.6909 32.7797 18.5068 33.634 20.0858C33.6471 20.0858 33.6471 20.0858 33.6603 20.0858C34.5146 18.5463 34.9352 17.8094 35.7763 16.4014C36.2232 16.4408 36.4467 16.4671 36.8804 16.5066C35.8289 18.2041 35.3163 19.0989 34.2649 21.007C35.3295 22.9018 35.8552 23.7966 36.9198 25.481C36.4729 25.5205 36.2495 25.5468 35.7895 25.5863C34.922 24.2046 34.5015 23.4808 33.6471 21.9544Z" fill="#7C8C99" />
                        <g filter="url(#filter0_ii_1643_3629)">
                            <circle cx="74" cy="21" r="4" fill="#E1B518" />
                        </g>
                        <defs>
                            <filter id="filter0_ii_1643_3629" x="69" y="16" width="9.3" height="9.3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="0.5" dy="0.5" />
                                <feGaussianBlur stdDeviation="0.15" />
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.0784314 0 0 0 0 0.0784314 0 0 0 0 0.0784314 0 0 0 0.55 0" />
                                <feBlend mode="normal" in2="shape" result="effect1_innerShadow_1643_3629" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="-1" dy="-1" />
                                <feGaussianBlur stdDeviation="0.5" />
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.207843 0 0 0 0 0.254902 0 0 0 0 0.32549 0 0 0 0.5 0" />
                                <feBlend mode="normal" in2="effect1_innerShadow_1643_3629" result="effect2_innerShadow_1643_3629" />
                            </filter>
                            <linearGradient id="paint0_linear_1643_3629" x1="4.56424" y1="5.13552" x2="40.6219" y2="41.1503" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#354153" />
                                <stop offset="0.983002" stop-color="#141414" />
                            </linearGradient>
                            <radialGradient id="paint1_radial_1643_3629" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(20.8909 15.7124) rotate(17.7041) scale(69.5618 70.7935)">
                                <stop stop-color="#141414" />
                                <stop offset="0.802052" stop-color="#354153" />
                            </radialGradient>
                        </defs>
                    </svg>

                </div>
            </div>
        </div>
        <div class="header__mobileMenu">
            <?php wp_nav_menu(array('menu' => 'header-menu')); ?>
            <div class="header__burgerClose">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>