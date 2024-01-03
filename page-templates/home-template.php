<?php

/*

Template Name: home

*/

get_header();
?>

<div class="homePageBack">
    <div class="homePage mainHome">
        <div class="mainHomeIntroSectionParent">
            <div class="mainHomeIntroInnerTitle">
                <h2><span>هلدینگ خانه زر</span>تنها مجری تخصصی سیستم وی آر اف</h2>
                <p>با بیش از 30 سال سابقه کاری در ساختمان سازی</p>
                <div class="mainHomeIntroInnerButtom">
                        <div class="readMore">
                            <a href="#">بیشتر بخوانید</a>
                            <span>
                                <svg fill="black" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.7 14.7" xml:space="preserve"><path d="M9.98 14.7 2.479 7.35 9.98 0l2.241 2.295L7.062 7.35l5.159 5.055z"/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>
                            </span>
                        </div>
                        <div >
                            <a href="#">پروژه های ما</a>
                            <span>
                                <svg fill="white" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.7 14.7" xml:space="preserve"><path d="M9.98 14.7 2.479 7.35 9.98 0l2.241 2.295L7.062 7.35l5.159 5.055z"/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>
                            </span>
                        </div>
                </div>
            </div>
            <div class=" mainHomeIntroInnerImg">
                <img src="<?php echo get_template_directory_uri() ?>/img/plain-concrete-structure-city copy.png" alt="" width="100%" >
                <div class="mainHomeIntroInnerImgTitle">
                    <div>
                        <h3>30</h3>
                        <p>سال تجربه</p>
                    </div>
                    <div>
                        <h3>+420</h3>
                        <p>پروژه ساختمانی</p>
                    </div>
                    <div>
                        <h3>+235</h3>
                        <p>نصب موفق</p>
                    </div>
                    <div>
                        <h3>+1410</h3>
                        <p>رضایت مشتری</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
        <div class="mainHomeOurServices">
            <h2>خدمات ما</h2>
            <span>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</span>
            <div class="swiper serviceSwiper">
                <div class="mainHomeOurServicesCards swiper-wrapper">
                    <div class="mainHomeOurServicesCard swiper-slide">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="82" height="84" viewBox="0 0 82 84" style="enable-background:new 0 0 82 84" xml:space="preserve"><style>.st0{fill:#cdb578}</style><g id="B_-_87_x2C__blueprint_x2C__Architecture_x2C__blue_print_x2C__construction_x2C__paper_x2C__plan"><path class="st0" d="M15.91 47.22c-.15 0-.46 0-.61-.15-1.37-.3-2.28-1.8-1.83-3.16l8.21-30.07c0-.3.3-.45.46-.45.3 0 .46 0 .61.15.76.9 1.83 1.5 3.04 1.5.15 0 .46.15.46.3s.15.3.15.6l-7.91 29.32c-.46 1.21-1.52 1.96-2.58 1.96zm6.54-31.87-7.91 29.02c-.15.6.15 1.35.91 1.5.61.15 1.37-.15 1.52-.9l7.91-28.57c-.91-.15-1.67-.6-2.43-1.05z"/><path class="st0" d="M35.98 47.22c-1.22 0-2.28-.75-2.59-1.95l-7.91-29.32c0-.15 0-.45.15-.6.15-.15.3-.3.46-.3 1.22 0 2.28-.6 3.04-1.5.15-.15.46-.3.76-.15.3 0 .46.3.46.6l8.21 30.07c.15.6.15 1.35-.3 1.95-.3.6-.91 1.05-1.52 1.2h-.76zM27.01 16.4l7.76 28.57c.15.6.91 1.05 1.52.9.3-.15.61-.3.76-.6.15-.3.15-.6.15-.9l-7.91-29.02c-.61.45-1.37.75-2.28 1.05z"/><path class="st0" d="M25.94 16.4c-3.19 0-5.63-2.56-5.63-5.71 0-3.16 2.59-5.56 5.63-5.56 3.19 0 5.78 2.56 5.78 5.56-.15 3.31-2.58 5.71-5.78 5.71zm0-9.92c-2.43 0-4.26 1.95-4.26 4.21 0 2.4 1.98 4.36 4.26 4.36 2.43 0 4.41-1.95 4.41-4.36-.15-2.26-1.97-4.21-4.41-4.21z"/><path class="st0" d="M25.94 13.85c-1.67 0-3.04-1.35-3.04-3.01 0-1.65 1.37-3.01 3.04-3.01s3.04 1.35 3.04 3.01c0 1.65-1.36 3.01-3.04 3.01zm0-4.66c-.91 0-1.67.75-1.67 1.65 0 .9.76 1.65 1.67 1.65.91 0 1.67-.75 1.67-1.65.01-.9-.75-1.65-1.67-1.65zm1.37-2.41h-.15c-.3-.15-.76-.15-1.06-.15-.46 0-.76 0-1.06.15-.15 0-.46 0-.61-.15-.15-.15-.3-.3-.3-.6V2.72c0-1.05.91-1.95 1.98-1.95 1.06 0 1.98.9 1.98 1.95v3.31c0 .15-.15.45-.3.6-.17 0-.33.15-.48.15zm-1.37-1.65h.61V2.72c0-.3-.3-.6-.61-.6-.3 0-.61.3-.61.6v2.41h.61zM14.08 51.74h-.15c-.3-.15-.61-.45-.46-.75l1.22-4.51c.15-.3.46-.6.76-.45.3.15.61.45.46.75l-1.22 4.51c0 .29-.31.45-.61.45zm23.73 0c-.3 0-.61-.15-.61-.45l-1.22-4.51c-.15-.3.15-.75.46-.9.3-.15.76.15.91.45l1.22 4.51c.15.3-.15.75-.46.9h-.3zM27.46 40.46h-2.74c-.3 0-.61-.3-.61-.6v-2.71c0-.3.3-.6.61-.6h2.74c.3 0 .61.3.61.6v2.71c.15.3-.3.6-.61.6zm-1.97-1.35h1.37v-1.35h-1.37v1.35zm-8.52-5.42c-.3 0-.46-.15-.61-.3-.76-1.5-1.22-3.16-1.22-4.81 0-.3.3-.6.61-.6.3 0 .76 0 .76.45 0 1.5.3 3.01 1.06 4.21.15.3 0 .75-.3.9 0 0-.15.15-.3.15z"/><path class="st0" d="M24.73 38.96c-1.83-.3-3.65-.9-5.02-1.95-.3-.15-.3-.6-.15-.9.15-.3.61-.3.91-.15 1.06.75 2.28 1.35 3.65 1.5V37c0-.3.3-.6.61-.6h2.74c.3 0 .61.3.61.6v.45c1.22-.3 2.28-.75 3.35-1.5.3-.15.76-.15.91.15.15.3.15.75-.15.9-1.37.9-3.04 1.65-4.71 1.8-.15 0-.46 0-.61-.15-.15-.15-.3-.3-.3-.45v-.6H25.2v.6c0 .15-.15.45-.3.45.13.31-.02.31-.17.31zm10.19-5.27c-.15 0-.15 0-.3-.15-.3-.15-.46-.6-.3-.9.76-1.35 1.06-2.86 1.06-4.36 0-.3.3-.6.61-.6.3 0 .61.3.61.6 0 1.8-.46 3.46-1.22 4.96-.01.3-.16.45-.46.45zm-4.87 20.15c-12.78 0-19.92-2.86-23.73-5.86C1.46 44.37 1 40.31 1 40.16c0-.3.3-.75.61-.75.3 0 .76.3.76.6 0 0 .46 3.76 4.87 6.92 5.48 4.06 17.64 8.12 44.26 3.46.3 0 .76.15.76.6 0 .45-.15.75-.61.75-8.52 1.5-15.67 2.1-21.6 2.1zm50.04-43.6c-.3 0-.61-.3-.61-.6v-.6c0-.15 0-.45.15-.6.15-.15.3-.3.46-.3.3 0 .61.3.61.6v.75c0 .45-.31.75-.61.75z"/><path class="st0" d="M71.11 69.63h-8.06c-.3 0-.61-.3-.61-.6V42.41l-2.28-4.51-2.13 4.51v26.61c0 .3-.3.6-.61.6H1.61c-.3 0-.61-.3-.61-.6V8.89c0-.3.3-.6.61-.6h19.62c.3 0 .46.15.61.3.15.15.15.45 0 .6-.15.45-.3 1.05-.3 1.65 0 2.41 1.98 4.36 4.26 4.36 2.43 0 4.41-1.95 4.41-4.36 0-.6-.15-1.2-.3-1.65-.15-.15 0-.45 0-.6.15-.15.3-.3.61-.3h39.54c.15 0 .46.15.46.3.15.15.15.3.15.6V57c1.06-1.2 2.59-2.1 4.26-2.1 2.89 0 5.17 2.26 5.63 5.11v.3c.14 5.11-4.12 9.32-9.45 9.32zm-7.3-1.36h7.3c4.41 0 8.06-3.46 8.21-7.82-.15-2.4-1.98-4.36-4.26-4.36s-4.11 1.95-4.26 4.36c0 .3-.3.6-.61.6-.3 0-.61-.3-.61-.6V9.64H31.57c.15.45.15.75.15 1.2 0 3.16-2.59 5.71-5.78 5.71-3.19 0-5.63-2.56-5.63-5.71 0-.45 0-.9.15-1.2H2.37v58.79h54.3V41.96l2.89-6.01c.15-.3.3-.45.61-.45.3 0 .46.15.61.45l2.89 6.01v26.31h.14z"/><path class="st0" d="M80.09 61.06c-.3 0-.61-.3-.61-.6-.15-2.4-1.98-4.36-4.26-4.36s-4.11 1.95-4.26 4.36c0 .3-.3.6-.61.6-.3 0-.61-.3-.61-.6V9.64c0-3.31 2.59-5.86 5.63-5.86S81 6.49 81 9.64V60.3c-.3.46-.61.76-.91.76zm-5.02-6.32c1.67 0 3.19.75 4.26 2.1V9.64c0-2.56-1.98-4.51-4.26-4.51s-4.26 2.1-4.26 4.51v47.21c1.06-1.36 2.59-2.11 4.26-2.11zM60.16 71.88c-.3 0-.61-.3-.61-.6V45.87c0-.3.3-.6.61-.6.3 0 .61.3.61.6v25.26c.15.45-.15.75-.61.75z"/><path class="st0" d="M63.05 75.04h-5.78c-.3 0-.61-.3-.61-.6V41.96l2.89-6.01c.15-.3.3-.45.61-.45.3 0 .46.15.61.45l2.89 6.01v32.32c.15.46-.15.76-.61.76zm-5.02-1.35h4.41V42.41l-2.28-4.51-2.13 4.51v31.28z"/><path class="st0" d="M63.05 77.44h-5.78c-.3 0-.61-.3-.61-.6v-2.41c0-.3.3-.6.61-.6h5.78c.3 0 .61.3.61.6v2.41c.15.3-.15.6-.61.6zm-5.02-1.35h4.41v-1.05h-4.41v1.05z"/><path class="st0" d="M61.68 83.23h-2.74c-1.22 0-2.28-1.05-2.28-2.26v-4.21c0-.3.3-.6.61-.6h5.78c.3 0 .61.3.61.6v4.21c.3 1.21-.77 2.26-1.98 2.26zm-3.5-5.71v3.61c0 .45.46.9.91.9h2.74c.46 0 .91-.45.91-.9v-3.61h-4.56zm4.87-31.2h-5.78c-.3 0-.61-.3-.61-.6v-3.61l2.89-6.01c.15-.3.3-.45.61-.45.3 0 .46.15.61.45l2.89 6.01v3.61c.15.3-.15.6-.61.6zm-5.02-1.35h4.41v-2.41l-2.28-4.51-2.13 4.51v2.41zm18.71-13.23c-.3 0-.61-.3-.61-.6v-20c0-.3.3-.6.61-.6.3 0 .61.3.61.6v19.85c0 .45-.3.75-.61.75zm0 17.59c-.3 0-.61-.3-.61-.6V38.2c0-.3.3-.6.61-.6.3 0 .61.3.61.6v10.52c0 .31-.3.61-.61.61zM37.5 73.54H7.54c-.3 0-.61-.3-.61-.6s.3-.6.61-.6h29.81c.3 0 .61.3.61.6 0 .29-.15.6-.46.6zm9.28 2.4H23.36c-.3 0-.61-.3-.61-.6s.3-.6.61-.6h23.42c.3 0 .61.3.61.6s-.15.6-.61.6zm7 0h-4.41c-.3 0-.61-.3-.61-.6s.3-.6.61-.6h4.41c.3 0 .61.3.61.6-.01.3-.31.6-.61.6zm-40.46 0H2.22c-.3 0-.61-.3-.61-.6s.3-.6.61-.6h11.1c.3 0 .61.3.61.6s-.15.6-.61.6zM70.05 16.1H38.87c-.3 0-.61-.3-.61-.6s.3-.6.61-.6H70.2c.3 0 .61.3.61.6s-.3.6-.76.6z"/></g></svg>
                        <h3>طراحی خاص</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و گرافیک است چاپگر ها و متون بلکه روزنامه است</p>
                    </div>
                    <div class="mainHomeOurServicesCard swiper-slide">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="92" height="84" viewBox="0 0 92 84" style="enable-background:new 0 0 92 84" xml:space="preserve"><style>.st0{fill:#cdb578}</style><g id="B_-_89_x2C__pipe_x2C__Building_x2C__construction_x2C__repair_x2C__gage"><path class="st0" d="M59.63 65.7H32.37c-3.12 0-5.58-2.44-5.58-5.52v-19c0-3.08 2.46-5.52 5.58-5.52h27.26c3.12 0 5.58 2.44 5.58 5.52v19c.01 3.09-2.62 5.52-5.58 5.52zM32.37 37.13c-2.3 0-4.11 1.79-4.11 4.06v19c0 2.27 1.81 4.06 4.11 4.06h27.26c2.3 0 4.1-1.79 4.1-4.06v-19c0-2.27-1.81-4.06-4.1-4.06H32.37z"/><path class="st0" d="M68.01 61.16H64.4c-.33 0-.66-.32-.66-.65V41.03c0-.32.33-.65.66-.65h7.23c.33 0 .66.33.66.65v11.69c0 .16-.16.32-.16.49l-.16.16c-1.15 1.3-1.64 2.92-1.15 4.71.16.33 0 .49-.16.81L68.5 61c-.16 0-.33.16-.49.16zm-2.79-1.46h2.63l1.64-1.62c-.49-1.95.16-4.22 1.64-5.68V41.84h-5.75l-.16 17.86z"/><path class="st0" d="M90.34 61.16H79.17c-.33 0-.49-.16-.66-.49-.16-.33 0-.65.16-.81 1.15-1.14 1.48-2.6 1.31-4.06l-3.61 3.57c-.33.32-.82.32-.99 0l-2.63-2.6c-.33-.16-.49-.33-.49-.49 0-.16 0-.32.16-.49l3.78-3.73c-1.48-.33-2.96.16-4.11 1.14-.16.16-.49.16-.82.16-.33-.16-.49-.33-.49-.65V41.03c0-.32.33-.65.66-.65h18.89c.33 0 .66.33.66.65v19.32c.01.48-.32.81-.65.81zm-9.69-1.46h8.87V41.84H72.44v9.58c1.64-.81 3.78-.97 5.42-.16.16.16.33.32.49.49 0 .16 0 .49-.16.65l-3.94 3.9 1.64 1.46 3.94-3.9c.16-.16.49-.16.66-.16.16 0 .49.16.49.49.66 1.61.66 3.72-.33 5.51zm-53.04 1.46h-7.23c-.33 0-.66-.32-.66-.65V41.03c0-.32.33-.65.66-.65h7.23c.33 0 .66.33.66.65v19.32c-.01.48-.34.81-.66.81zm-6.57-1.46h5.75V41.84h-5.75V59.7z"/><path class="st0" d="M20.38 61.16H1.66c-.33 0-.66-.33-.66-.65V41.03c0-.32.33-.65.66-.65h18.56c.33 0 .66.33.66.65v19.32c.16.48-.17.81-.5.81zM2.48 59.7h17.08V41.84H2.48V59.7zm47.13-22.57h-7.23c-.33 0-.66-.33-.66-.65v-6.17c0-.16.16-.49.33-.65.16-.16.49-.16.66-.16 1.15.33 2.3.49 3.45.49s2.3-.16 3.45-.49c.16 0 .49 0 .66.16.16.16.33.33.33.65v6.17c-.17.32-.49.65-.99.65zm-6.57-1.46h5.75v-4.55c-1.97.33-3.78.33-5.75 0v4.55zM46 8.72c-.33 0-.66-.33-.66-.65V5.8c0-.33.33-.65.66-.65s.66.33.66.65v2.27c0 .32-.33.65-.66.65zm10.35 7.95h-2.3c-.33 0-.66-.32-.66-.65s.33-.65.66-.65h2.3c.33 0 .66.32.66.65-.01.33-.17.65-.66.65zM46 27.06c-.33 0-.66-.32-.66-.65v-2.27c0-.33.33-.65.66-.65s.66.32.66.65v2.27c0 .33-.33.65-.66.65zm-8.05-10.39h-2.3c-.33 0-.66-.32-.66-.65s.33-.65.66-.65h2.3c.33 0 .66.32.66.65s-.33.65-.66.65zm9.69 3.09c-.49 0-1.15-.16-1.48-.65-.66-.65-1.81-2.6-3.12-4.71-.16-.33-.49-.65-.66-.97-.16-.32-.16-.65.16-.97.16-.16.66-.32.99-.16.33.16.82.49 1.31.81 2.13 1.3 3.78 2.27 4.43 2.92.82.81.82 2.11 0 2.92-.64.65-1.14.81-1.63.81zm-2.46-4.55c.82 1.14 1.48 2.44 1.97 2.92.33.33.66.33.99 0 .33-.32.33-.65 0-.97-.5-.32-1.81-1.14-2.96-1.95z"/><path class="st0" d="M46 31.45c-8.54 0-15.6-6.98-15.6-15.42C30.4 7.58 37.3.6 46 .6c8.54 0 15.6 6.82 15.6 15.42 0 8.45-7.06 15.43-15.6 15.43zm0-29.39c-7.72 0-14.12 6.17-14.12 13.96 0 7.63 6.24 13.96 14.12 13.96 7.72 0 14.12-6.33 14.12-13.96 0-7.63-6.4-13.96-14.12-13.96z"/><path class="st0" d="M46 27.06c-6.08 0-11.17-4.87-11.17-11.04 0-6.01 4.93-11.04 11.17-11.04 6.08 0 11.17 4.87 11.17 11.04 0 6.01-5.09 11.04-11.17 11.04zm0-20.61c-5.26 0-9.69 4.22-9.69 9.58 0 5.2 4.27 9.58 9.69 9.58 5.26 0 9.69-4.22 9.69-9.58 0-5.2-4.43-9.58-9.69-9.58zm18.39 36.36H45.18c-.33 0-.66-.33-.66-.65 0-.33.33-.65.66-.65H64.4c.33 0 .66.32.66.65-.01.33-.17.65-.67.65zm-22.33 0H39.6c-.33 0-.66-.33-.66-.65 0-.33.33-.65.66-.65h2.46c.33 0 .66.32.66.65-.01.33-.33.65-.66.65zm-11.5 19.48c-.33 0-.49-.16-.66-.33-.16-.32-.16-.81.33-.97l6.08-3.41c.33-.16.82-.16.99.32.16.33.16.81-.33.97l-6.08 3.41c-.16-.15-.16.01-.33.01zm7.06-.81c-.33 0-.49-.16-.66-.33-.16-.32-.16-.81.33-.97l11-6.33c.33-.16.82-.16.99.33.16.33.16.81-.33.97l-11 6.33h-.33zm43.36-7.95c-1.64 0-2.79-1.3-2.79-2.76 0-1.62 1.31-2.76 2.79-2.76 1.64 0 2.79 1.3 2.79 2.76s-1.31 2.76-2.79 2.76zm0-4.22c-.82 0-1.31.65-1.31 1.3 0 .81.66 1.3 1.31 1.3.82 0 1.31-.65 1.31-1.3.01-.65-.49-1.3-1.31-1.3z"/><path class="st0" d="M75.23 62.62c-1.64 0-3.12-.65-4.27-1.79-2.46-2.27-2.46-6.17 0-8.61 1.81-1.79 4.6-2.27 6.9-1.14.16.16.33.32.49.49.16.16 0 .49-.16.65l-3.94 3.9 1.64 1.46 3.94-3.9c.16-.16.49-.16.66-.16.16 0 .49.16.49.49 1.15 2.27.66 5.03-1.31 6.82-1.32 1.14-2.79 1.79-4.44 1.79zm0-10.55c-1.15 0-2.46.49-3.28 1.3a4.557 4.557 0 0 0 0 6.49c1.81 1.79 4.76 1.79 6.57 0 1.15-1.14 1.64-2.6 1.31-4.06l-3.61 3.57c-.33.32-.82.32-.99 0l-2.63-2.6c-.16-.16-.33-.33-.33-.49 0-.16 0-.32.16-.49l3.78-3.73c-.32.01-.65.01-.98.01zM54.38 83.4c-.82 0-1.81-.16-2.63-.49l-.49-.49c0-.16 0-.49.16-.65l3.94-3.9-1.64-1.62-3.94 3.9c-.16.16-.49.33-.66.16-.16 0-.49-.16-.49-.49-1.15-2.27-.66-5.03 1.15-6.82 1.15-1.14 2.63-1.79 4.27-1.79 1.64 0 3.12.65 4.27 1.79 1.15 1.14 1.81 2.6 1.81 4.22s-.66 3.08-1.81 4.22c-.82 1.31-2.47 1.96-3.94 1.96zm-.99-1.62c1.48.33 3.12-.16 4.27-1.3.82-.81 1.31-1.95 1.31-3.25s-.49-2.44-1.31-3.25c-.82-.81-1.97-1.3-3.29-1.3-1.31 0-2.46.49-3.29 1.3-1.15 1.14-1.64 2.6-1.31 4.06l3.78-3.57c.16-.16.33-.16.49-.16.16 0 .33 0 .49.16l2.63 2.6c.33.32.33.81 0 .97l-3.77 3.74z"/><path class="st0" d="M59.47 76.42h-.17c-.33 0-.49-.33-.49-.49-.16-.65-.66-1.3-1.15-1.79-.49-.49-1.15-.97-1.81-1.14-.16 0-.49-.33-.49-.49 0-.32 0-.49.16-.65L69.64 57.9c.16-.16.49-.32.66-.16.33 0 .49.32.49.49.16.65.66 1.3 1.15 1.79.49.49 1.15.97 1.81 1.14.16 0 .49.33.49.49 0 .32 0 .49-.16.65L59.96 76.26c-.17.16-.33.16-.49.16zm-2.14-4.38c.49.33.98.65 1.48.97.49.49.82.81.98 1.3l12.65-12.5c-.49-.33-.98-.65-1.48-.97-.49-.49-.82-.81-.98-1.46L57.33 72.04z"/></g></svg>
                        <h3>استفاده از سیستم VRF</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و گرافیک است چاپگر ها و متون بلکه روزنامه است</p>
                    </div>
                    <div class="mainHomeOurServicesCard swiper-slide">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="64" height="88" viewBox="0 0 64 88" style="enable-background:new 0 0 64 88" xml:space="preserve"><style>.st0{fill:#cdb578}</style><g id="B_-_86_x2C__worker_x2C__Building_x2C__carpenter_x2C__construction_x2C__repair"><path class="st0" d="M31.68 87.16c-10.22 0-20.27-1.1-30.17-3.47-.32 0-.48-.32-.48-.63v-6.47c-.16-13.1 0-13.26 10.38-18.78 2.08-1.1 4.79-2.52 7.98-4.26.16-.16.32-.16.48 0 .16.16.32.16.48.32l7.02 12.62 4.15-3.95c.32-.32.64-.32.96 0l3.67 3.47 7.5-12.15c.16-.32.64-.47.96-.32 3.03 1.74 5.75 3.16 7.82 4.26 10.7 5.68 10.7 5.84 10.54 18.94v6.31c0 .32-.16.63-.64.63a136.613 136.613 0 0 1-30.65 3.48zM2.31 82.43c19.32 4.42 39.11 4.42 59.06 0v-5.84c0-6.31.16-9.47-1.12-11.52-1.12-2.05-3.67-3.47-8.78-6.16-1.92-1.1-4.31-2.37-7.18-3.95l-7.5 12.31c-.16.16-.32.32-.48.32-.16 0-.48 0-.64-.16l-3.83-3.63-4.31 4.26c-.16.16-.32.16-.64.16-.16 0-.48-.16-.48-.32l-7.18-12.94c-2.87 1.58-5.43 3-7.34 3.95-4.95 2.68-7.5 3.95-8.62 6-1.12 2.05-1.12 5.21-1.12 11.52.16 1.89.16 3.79.16 6z"/><path class="st0" d="M47.48 78.95h-6.54c-.32 0-.48-.16-.64-.32a.473.473 0 0 1 0-.63l10.06-20.36c.16-.16.16-.32.48-.32h.64l.96.47c1.6.95 3.03 1.58 4.31 2.37.32.16.48.63.32.95l-8.62 17.52c-.33.17-.65.32-.97.32zm-5.27-1.42h4.95l8.14-16.57c-.96-.63-2.23-1.26-3.67-1.89l-.32-.16-9.1 18.62zm-10.53 9.63c-6.07 0-12.13-.47-18.2-1.26-.32 0-.64-.31-.64-.63v-4.1c0-.31.32-.63.64-.63h36.4c.32 0 .64.32.64.63v4.1c0 .32-.32.63-.64.63-5.91.79-12.14 1.26-18.2 1.26zm-17.4-2.53c11.49 1.58 23.31 1.58 34.96 0v-2.84H14.28v2.84zm35.76.64zM32.16 50.08c-10.38 0-15.64-14.52-15.64-22.25 0-.95 0-1.74.32-2.68 0-.31.32-.63.64-.63H47c.32 0 .64.32.64.63.16.95.32 1.89.32 2.68-.16 7.73-5.59 22.25-15.8 22.25zM17.95 25.93c-.16.63-.16 1.26-.16 1.89 0 4.1 1.44 9.31 3.83 13.26 1.92 3.47 5.43 7.42 10.54 7.42 5.11 0 8.46-4.1 10.54-7.42 2.23-3.95 3.83-9.15 3.83-13.26 0-.63 0-1.26-.16-1.89H17.95zm18.2 41.66c-.16 0-.32 0-.48-.16l-4.31-3.95c-.32-.32-.32-.63-.16-.95l8.78-11.99c.16-.16.32-.32.48-.32.16 0 .48 0 .48.16l3.35 3.16c.32.16.32.63.16.95l-7.82 12.78c.16.16-.16.32-.48.32.16 0 .16 0 0 0zm-3.35-4.73 3.19 3 7.18-11.52-2.39-2.21-7.98 10.73z"/><path class="st0" d="M27.05 68.22c-.32 0-.48-.16-.64-.32l-7.5-13.57c-.16-.31-.16-.63.16-.79l3.35-3.16c.16-.16.32-.16.48-.16.16 0 .32.16.48.32l8.78 11.99a1 1 0 0 1 0 .95l-4.79 4.73c0 .01-.16.01-.32.01zM20.5 54.18l6.71 12.15 3.67-3.63-7.98-10.73-2.4 2.21zm15.33-20.67c-.32 0-.48-.16-.64-.47-.16-.31 0-.79.32-.95.32-.16 3.51-1.42 5.11.16.32.32.32.79 0 .95-.32.32-.8.32-.96 0-.8-.79-2.87-.16-3.51.16 0 .15-.16.15-.32.15zm-7.5 0h-.32c-.64-.32-2.71-.95-3.51-.16-.32.32-.8.32-.96 0-.32-.32-.32-.79 0-.95 1.6-1.58 4.79-.32 5.11-.16.32.16.48.63.32.95-.01.16-.32.32-.64.32zm.16-28.88c-.32 0-.64-.32-.64-.63v-.16c0-.16 0-.47.16-.63.16-.16.32-.32.64-.32s.64.32.64.63v.32c-.17.47-.49.79-.8.79z"/><path class="st0" d="M48.6 20.88H15.08c-.32 0-.64-.32-.64-.63v-.47c0-6.63 3.83-12.78 9.9-15.62.16-.16.47-.16.63-.01.16.16.32.32.32.63v3.79c0 .16.16.32.32.32h1.6c.16 0 .32-.16.32-.32 0-.31.32-.63.8-.63.32 0 .64.32.64.63v2.53c0 .63.64 1.26 1.28 1.26h2.87c.64 0 1.28-.63 1.28-1.26V8.57c0-.31.32-.63.64-.63s.64.32.8.63c0 .16.16.32.32.32h1.6c.16 0 .32-.16.32-.32V4.79c0-.32.16-.47.32-.63.16-.16.48-.16.64 0 6.07 2.84 9.9 9 9.9 15.62v.47c.3.32-.02.63-.34.63zm-32.73-1.42H47.8c0-5.52-3.19-10.73-7.98-13.41v2.52c0 .95-.8 1.74-1.76 1.74h-1.92v.79c0 1.42-1.28 2.68-2.71 2.68h-2.87c-1.44 0-2.71-1.26-2.71-2.68v-.79h-1.92c-.96 0-1.76-.79-1.76-1.74V6.05c-5.1 2.68-8.3 7.89-8.3 13.41z"/><path class="st0" d="M35.19 4.63c-.32 0-.64-.32-.64-.63v-.32c0-.32.32-.63.64-.63.16 0 .48.16.64.32.16.16.16.47.16.63 0 .31-.32.63-.8.63zm13.73 21.3H14.76c-1.28 0-2.23-.95-2.23-2.21v-2.05c0-1.26.96-2.21 2.23-2.21h34.16c1.28 0 2.24.95 2.24 2.21v2.05c-.01 1.26-.96 2.21-2.24 2.21zm-34.16-5.05c-.48 0-.8.31-.8.79v2.05c0 .47.32.79.8.79h34.16c.48 0 .8-.32.8-.79v-2.05c0-.47-.32-.79-.8-.79H14.76z"/><path class="st0" d="M33.27 13.94H30.4c-1.44 0-2.71-1.26-2.71-2.68V3.52c0-1.42 1.28-2.68 2.71-2.68h2.87c.8 0 1.44.32 1.92.79.48.47.8 1.26.8 1.89v7.73c0 1.43-1.28 2.69-2.72 2.69zM30.4 2.1c-.64 0-1.28.63-1.28 1.26v7.73c0 .63.64 1.26 1.28 1.26h2.87c.64 0 1.28-.63 1.28-1.26V3.36c0-.32-.16-.63-.32-.95-.32-.31-.64-.31-.96-.31H30.4zm8.94 15.63h-3.67c-.32 0-.64-.32-.64-.63s.32-.63.64-.63h3.67c.32 0 .64.32.64.63s-.32.63-.64.63zm-6.86 0H19.71c-.32 0-.64-.32-.64-.63s.32-.63.64-.63h12.77c.32 0 .64.32.64.63s-.32.63-.64.63z"/><path class="st0" d="M27.37 10.47h-1.6c-.96 0-1.76-.79-1.76-1.74V4c0-.47.16-.95.48-1.26.32-.32.8-.47 1.28-.47h1.6c.96 0 1.76.79 1.76 1.89v4.73c-.01.79-.8 1.58-1.76 1.58zm-1.6-6.95c-.16 0-.16 0-.32.16 0 0-.16.16-.16.32v4.73c0 .16.16.32.32.32h1.6c.16 0 .32-.16.32-.32V4c0-.16-.16-.47-.32-.47h-1.44v-.01zm12.13 6.95h-1.6c-.96 0-1.76-.79-1.76-1.74V4c0-.47.16-.95.48-1.26.32-.32.8-.47 1.28-.47h1.6c.96 0 1.76.79 1.76 1.89v4.73c.16.79-.8 1.58-1.76 1.58zm-1.59-6.95c-.16 0-.16 0-.32.16 0 0-.16.16-.16.32v4.73c0 .16.16.32.32.32h1.6c.16 0 .32-.16.32-.32V4c0-.16-.16-.47-.32-.47h-1.44v-.01zm-4.47 41.03c-1.28 0-2.55-.47-3.67-1.26-.32-.16-.48-.63-.16-.95.16-.32.64-.47.96-.16 1.92 1.26 3.83 1.26 5.91 0 .32-.16.8-.16.96.16.16.32.16.79-.16.95-1.29.95-2.56 1.26-3.84 1.26zm-8.78 34.4h-6.54c-.32 0-.48-.16-.64-.47L7.25 60.96c-.16-.32 0-.79.32-.95 1.12-.63 2.55-1.42 4.15-2.21l1.12-.63c.16-.16.32-.16.64 0 .16 0 .32.16.48.31l10.06 20.36c.16.16.16.47 0 .63-.48.33-.64.48-.96.48zm-6.07-1.42h4.95l-9.1-18.62-.48.16c-1.28.63-2.39 1.26-3.51 1.89l8.14 16.57zm25.86 4.26h-.32c-.32-.16-.48-.63-.32-.95L43.49 78c.16-.31.64-.47.96-.31.32.16.48.63.32.95l-1.28 2.84c0 .16-.32.31-.64.31z"/><path class="st0" d="M21.14 81.79c-.32 0-.48-.16-.64-.47l-1.28-2.84c-.16-.32 0-.79.32-.95.32-.16.8 0 .96.32l1.28 2.84c.16.32 0 .79-.32.95-.16.15-.16.15-.32.15z"/></g></svg>
                        <h3>تاسیسات</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و گرافیک است چاپگر ها و متون بلکه روزنامه است</p>
                    </div>
                    <div class="mainHomeOurServicesCard swiper-slide">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="92" height="81" viewBox="0 0 92 81" style="enable-background:new 0 0 92 81" xml:space="preserve"><style>.st0{fill:#cdb578}</style><g id="B_-_97_x2C__Home_x2C__Building_x2C__construction_x2C__repair_x2C__hammer_x2C__wrench"><path class="st0" d="M80.14 80.47H12.02c-.33 0-.66-.33-.66-.65V41.11c0-.16.16-.32.16-.49L45.59 9.23c.33-.32.66-.32.99 0l34.06 31.23c.16.16.16.33.16.49v38.71c.16.49-.17.81-.66.81zm-67.46-1.46h66.64V41.44l-33.23-30.9-33.4 30.9v37.57z"/><path class="st0" d="M90.51 51.19c-.17 0-.33 0-.49-.16l-43.93-40.5-43.77 40.5c-.17.16-.49.33-.82.16-.34-.16-.5-.32-.5-.65v-8.46c0-.16.16-.33.16-.49L45.42.77c.33-.33.66-.33.99 0L90.83 41.6c.17.16.17.32.17.49v8.46c0 .32-.17.48-.49.64.16 0 0 0 0 0zM46.08 8.91c.16 0 .33 0 .49.16l43.11 39.69v-6.34L46.08 2.24 2.48 42.41v6.34L45.59 9.07c.16-.16.33-.16.49-.16z"/><path class="st0" d="M77.18 30.7c-.16 0-.33 0-.49-.16l-7.57-7.16c-.17-.16-.17-.33-.17-.49V17.2c0-.33.33-.65.66-.65h7.57c.33 0 .66.33.66.65v12.69c0 .33-.17.49-.49.65.16.16-.01.16-.17.16zm-6.75-8.13 6.09 5.69V17.85h-6.09v4.72zM53.49 42.9H41.47c-.33 0-.66-.33-.66-.65v-8.13c0-.33.33-.65.66-.65h12.01c.33 0 .66.32.66.65v8.13c0 .32-.33.65-.65.65zM42.3 41.44h10.37v-6.67H42.13v6.67h.17zm16.95 1.46H55.3c-.33 0-.66-.33-.66-.65v-8.13c0-.33.33-.65.66-.65h3.95c.33 0 .66.32.66.65v8.13c.16.32-.17.65-.66.65zm-3.13-1.46h2.47v-6.67h-2.47v6.67z"/><path class="st0" d="M55.46 41.92h-1.97c-.33 0-.66-.32-.66-.65v-6.02c0-.32.33-.65.66-.65h1.97c.33 0 .66.33.66.65v6.02c0 .33-.33.65-.66.65zm-1.32-1.46h.49v-4.55h-.49v4.55zM41.47 41.6h-8.55c-.33 0-.49-.16-.66-.33-.16-.16-.16-.49 0-.65 1.65-3.74 4.77-6.18 9.21-7.16.17 0 .49 0 .66.16.17.16.33.33.33.65v6.67c-.16.33-.49.66-.99.66zm-7.4-1.47h6.75v-5.04c-3.13.82-5.43 2.6-6.75 5.04zm15.96 30.58h-5.1c-.33 0-.66-.33-.66-.65v-9.6c0-.32.33-.65.66-.65h5.1c.33 0 .66.33.66.65v9.6c0 .33-.33.65-.66.65zm-4.44-1.46h3.62v-8.13h-3.62v8.13zm4.44-13.18h-5.1c-.33 0-.66-.33-.66-.65V42.25c0-.33.33-.65.66-.65h5.1c.33 0 .66.32.66.65v13.17c0 .33-.33.65-.66.65zm-4.44-1.46h3.62V42.9h-3.62v11.71zm1.81-13.99c-1.32 0-2.47-1.14-2.47-2.44s1.15-2.44 2.47-2.44c1.32 0 2.47 1.14 2.47 2.44s-.99 2.44-2.47 2.44zm0-3.41c-.49 0-.99.49-.99.98s.49.98.99.98c.49 0 .99-.49.99-.98 0-.66-.33-.98-.99-.98zM30.78 64.04c-2.63 0-4.94-1.63-5.92-4.07-.17-.16 0-.49.17-.65.16-.16.33-.33.66-.33h5.92v-2.28h-5.92c-.17 0-.49-.16-.66-.33-.17-.16-.17-.49-.17-.65.82-2.44 3.29-4.07 5.92-4.07 3.45 0 6.25 2.77 6.25 6.18.17 3.44-2.8 6.2-6.25 6.2zm-3.95-3.58c.82 1.3 2.47 2.11 3.95 2.11 2.63 0 4.77-2.11 4.77-4.72 0-2.6-2.14-4.72-4.77-4.72-1.65 0-3.13.81-3.95 2.11h5.43c.33 0 .66.32.66.65v3.74c0 .33-.33.65-.66.65h-5.43v.18zm34.55 3.58c-3.45 0-6.25-2.77-6.25-6.18 0-3.42 2.8-6.18 6.25-6.18 2.63 0 4.94 1.63 5.92 4.07.17.16 0 .49-.16.65-.17.16-.33.33-.66.33h-5.92V59h5.92c.17 0 .49.16.66.33.16.16.16.49.16.65-.98 2.44-3.28 4.06-5.92 4.06zm0-10.89c-2.63 0-4.77 2.11-4.77 4.72 0 2.6 2.14 4.72 4.77 4.72 1.65 0 3.13-.81 3.95-2.11H59.9c-.33 0-.66-.32-.66-.65v-3.74c0-.33.33-.65.66-.65h5.43c-.82-1.48-2.3-2.29-3.95-2.29z"/><path class="st0" d="M56.45 61.12H35.72c-.33 0-.49-.16-.66-.33-.16-.16-.16-.49 0-.65.33-.65.49-1.46.49-2.11 0-.81-.17-1.46-.49-2.11-.16-.16-.16-.49 0-.65.17-.16.33-.33.66-.33h20.57c.33 0 .49.16.66.33.17.16.17.49 0 .65-.33.65-.49 1.46-.49 2.11 0 .81.16 1.46.49 2.11.17.16.17.49 0 .65-.17.16-.34.33-.5.33zm-19.58-1.47H55.3c-.16-.65-.33-1.14-.33-1.79 0-.65.17-1.14.33-1.79H36.87c.16.65.33 1.14.33 1.79 0 .65-.17 1.14-.33 1.79z"/></g></svg>
                        <h3>ساخت اصولی</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و گرافیک است چاپگر ها و متون بلکه روزنامه است</p>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        </div>
        <div class="mainHomeVrfServices">
            <div class="mainHomeVrfServicesImg">
                <img src="<?php echo get_template_directory_uri() ?>/img/khanezar1.png" alt="" >
            </div>
            <div class="mainHomeVrfServicesText">
                <h4>خدمات هلدینگ خانه رز</h4>
                <h2>وی آر اف, <span>فناوری پیشرفته</span> <br> برای داشتن خانه ای بهتر</h2>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان</p>
                <a href="#">بیشتر بخوانید <span><svg fill="white" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.7 14.7" xml:space="preserve"><path d="M9.98 14.7 2.479 7.35 9.98 0l2.241 2.295L7.062 7.35l5.159 5.055z"/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg></span></a>
            </div>
        </div>
        <div class="mainHomeOurProject">
            <h2>پروژه های ما</h2>
            <span>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</span>
            <a href="#">موارد بیشتر ></a>
            <div class="swiper projectSwiper">
                <div class="mainHomeOurProjectCards swiper-wrapper">
                    <div class="mainHomeOurProjectCard swiper-slide">
                        <img src="<?php echo get_template_directory_uri() ?>/img/MG_0238-min-scaled.jpg" alt="" height="400px" width="100%">
                        <div class="homeInnerProjectCardText">
                            <span class="homeInnerProjectCard">
                                <svg class="svgOne" width="40" height="40" viewBox="12 12 45 45" fill="none" xmlns="http://www.w3.org/2000/svg"><path  d="m27.96 32.274 7.485-.936a2.041 2.041 0 0 1 2.29 1.925l.38 7.548M19.04 21.309c7.237-8.641 20.098-9.766 28.726-2.513 8.627 7.253 9.754 20.139 2.517 28.78-7.236 8.641-20.097 9.766-28.725 2.513-8.627-7.253-9.754-20.138-2.518-28.78Z" stroke="#EEE" stroke-width="3.061" stroke-linecap="round"/></svg>
                                <svg class="svgTwo" width="40" height="40" viewBox="11.5 11 37 37" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M44.288 41.123c6.468-7.717 5.46-19.225-2.249-25.702-7.71-6.478-19.202-5.472-25.67 2.246-6.467 7.717-5.46 19.225 2.249 25.702 7.71 6.477 19.202 5.472 25.67-2.246ZM31.198 27.98a.456.456 0 0 1 .51.43l.34 6.74a1.368 1.368 0 1 0 2.73-.137l-.34-6.74a3.19 3.19 0 0 0-3.58-3.008l-6.689.835a1.367 1.367 0 0 0 .34 2.716l6.688-.836Z" fill="#EEE"/></svg>
                            </span>
                            <div class="homeInnerProjectCardGradient">
                            <h3>پروژه پرواز</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و گرافیک است چاپگر ها و متون بلکه روزنامه است</p>
                            </div>
                        </div>
                    </div>
                    <div class="mainHomeOurProjectCard swiper-slide">
                        <img src="<?php echo get_template_directory_uri() ?>/img/SOH_7606-3-1-scaled.jpg" alt="" height="400px" width="100%">
                        <div class="homeInnerProjectCardText">
                            <span class="homeInnerProjectCard">
                                <svg class="svgOne" width="40" height="40" viewBox="12 12 45 45" fill="none" xmlns="http://www.w3.org/2000/svg"><path  d="m27.96 32.274 7.485-.936a2.041 2.041 0 0 1 2.29 1.925l.38 7.548M19.04 21.309c7.237-8.641 20.098-9.766 28.726-2.513 8.627 7.253 9.754 20.139 2.517 28.78-7.236 8.641-20.097 9.766-28.725 2.513-8.627-7.253-9.754-20.138-2.518-28.78Z" stroke="#EEE" stroke-width="3.061" stroke-linecap="round"/></svg>
                                <svg class="svgTwo" width="40" height="40" viewBox="11.5 11 37 37" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M44.288 41.123c6.468-7.717 5.46-19.225-2.249-25.702-7.71-6.478-19.202-5.472-25.67 2.246-6.467 7.717-5.46 19.225 2.249 25.702 7.71 6.477 19.202 5.472 25.67-2.246ZM31.198 27.98a.456.456 0 0 1 .51.43l.34 6.74a1.368 1.368 0 1 0 2.73-.137l-.34-6.74a3.19 3.19 0 0 0-3.58-3.008l-6.689.835a1.367 1.367 0 0 0 .34 2.716l6.688-.836Z" fill="#EEE"/></svg>
                            </span>
                            <div class="homeInnerProjectCardGradient">
                            <h3>پروژه پرواز</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و گرافیک است چاپگر ها و متون بلکه روزنامه است</p>
                            </div>
                        </div>
                    </div>
                    <div class="mainHomeOurProjectCard swiper-slide">
                        <img src="<?php echo get_template_directory_uri() ?>/img/MG_0238-min-scaled.jpg" alt="" height="400px" width="100%">
                        <div class="homeInnerProjectCardText">
                            <span class="homeInnerProjectCard">
                                <svg class="svgOne" width="40" height="40" viewBox="12 12 45 45" fill="none" xmlns="http://www.w3.org/2000/svg"><path  d="m27.96 32.274 7.485-.936a2.041 2.041 0 0 1 2.29 1.925l.38 7.548M19.04 21.309c7.237-8.641 20.098-9.766 28.726-2.513 8.627 7.253 9.754 20.139 2.517 28.78-7.236 8.641-20.097 9.766-28.725 2.513-8.627-7.253-9.754-20.138-2.518-28.78Z" stroke="#EEE" stroke-width="3.061" stroke-linecap="round"/></svg>
                                <svg class="svgTwo" width="40" height="40" viewBox="11.5 11 37 37" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M44.288 41.123c6.468-7.717 5.46-19.225-2.249-25.702-7.71-6.478-19.202-5.472-25.67 2.246-6.467 7.717-5.46 19.225 2.249 25.702 7.71 6.477 19.202 5.472 25.67-2.246ZM31.198 27.98a.456.456 0 0 1 .51.43l.34 6.74a1.368 1.368 0 1 0 2.73-.137l-.34-6.74a3.19 3.19 0 0 0-3.58-3.008l-6.689.835a1.367 1.367 0 0 0 .34 2.716l6.688-.836Z" fill="#EEE"/></svg>
                            </span>
                            <div class="homeInnerProjectCardGradient">
                            <h3>پروژه پرواز</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و گرافیک است چاپگر ها و متون بلکه روزنامه است</p>
                            </div>
                        </div>
                    </div>
                    <div class="mainHomeOurProjectCard swiper-slide">
                        <img src="<?php echo get_template_directory_uri() ?>/img/SOH_7606-3-1-scaled.jpg" alt="" height="400px" width="100%">
                        <div class="homeInnerProjectCardText">
                            <span class="homeInnerProjectCard">
                                <svg class="svgOne" width="40" height="40" viewBox="12 12 45 45" fill="none" xmlns="http://www.w3.org/2000/svg"><path  d="m27.96 32.274 7.485-.936a2.041 2.041 0 0 1 2.29 1.925l.38 7.548M19.04 21.309c7.237-8.641 20.098-9.766 28.726-2.513 8.627 7.253 9.754 20.139 2.517 28.78-7.236 8.641-20.097 9.766-28.725 2.513-8.627-7.253-9.754-20.138-2.518-28.78Z" stroke="#EEE" stroke-width="3.061" stroke-linecap="round"/></svg>
                                <svg class="svgTwo" width="40" height="40" viewBox="11.5 11 37 37" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M44.288 41.123c6.468-7.717 5.46-19.225-2.249-25.702-7.71-6.478-19.202-5.472-25.67 2.246-6.467 7.717-5.46 19.225 2.249 25.702 7.71 6.477 19.202 5.472 25.67-2.246ZM31.198 27.98a.456.456 0 0 1 .51.43l.34 6.74a1.368 1.368 0 1 0 2.73-.137l-.34-6.74a3.19 3.19 0 0 0-3.58-3.008l-6.689.835a1.367 1.367 0 0 0 .34 2.716l6.688-.836Z" fill="#EEE"/></svg>
                            </span>
                            <div class="homeInnerProjectCardGradient">
                            <h3>پروژه پرواز</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و گرافیک است چاپگر ها و متون بلکه روزنامه است</p>
                            </div>
                        </div>
                    </div>
                    <div class="mainHomeOurProjectCard swiper-slide">
                        <img src="<?php echo get_template_directory_uri() ?>/img/MG_0238-min-scaled.jpg" alt="" height="400px" width="100%">
                        <div class="homeInnerProjectCardText">
                            <span class="homeInnerProjectCard">
                                <svg class="svgOne" width="40" height="40" viewBox="12 12 45 45" fill="none" xmlns="http://www.w3.org/2000/svg"><path  d="m27.96 32.274 7.485-.936a2.041 2.041 0 0 1 2.29 1.925l.38 7.548M19.04 21.309c7.237-8.641 20.098-9.766 28.726-2.513 8.627 7.253 9.754 20.139 2.517 28.78-7.236 8.641-20.097 9.766-28.725 2.513-8.627-7.253-9.754-20.138-2.518-28.78Z" stroke="#EEE" stroke-width="3.061" stroke-linecap="round"/></svg>
                                <svg class="svgTwo" width="40" height="40" viewBox="11.5 11 37 37" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M44.288 41.123c6.468-7.717 5.46-19.225-2.249-25.702-7.71-6.478-19.202-5.472-25.67 2.246-6.467 7.717-5.46 19.225 2.249 25.702 7.71 6.477 19.202 5.472 25.67-2.246ZM31.198 27.98a.456.456 0 0 1 .51.43l.34 6.74a1.368 1.368 0 1 0 2.73-.137l-.34-6.74a3.19 3.19 0 0 0-3.58-3.008l-6.689.835a1.367 1.367 0 0 0 .34 2.716l6.688-.836Z" fill="#EEE"/></svg>
                            </span>
                            <div class="homeInnerProjectCardGradient">
                            <h3>پروژه پرواز</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و گرافیک است چاپگر ها و متون بلکه روزنامه است</p>
                            </div>
                        </div>
                    </div>
                    <div class="mainHomeOurProjectCard swiper-slide">
                        <img src="<?php echo get_template_directory_uri() ?>/img/SOH_7606-3-1-scaled.jpg" alt="" height="400px" width="100%">
                        <div class="homeInnerProjectCardText">
                            <span class="homeInnerProjectCard">
                                <svg class="svgOne" width="40" height="40" viewBox="12 12 45 45" fill="none" xmlns="http://www.w3.org/2000/svg"><path  d="m27.96 32.274 7.485-.936a2.041 2.041 0 0 1 2.29 1.925l.38 7.548M19.04 21.309c7.237-8.641 20.098-9.766 28.726-2.513 8.627 7.253 9.754 20.139 2.517 28.78-7.236 8.641-20.097 9.766-28.725 2.513-8.627-7.253-9.754-20.138-2.518-28.78Z" stroke="#EEE" stroke-width="3.061" stroke-linecap="round"/></svg>
                                <svg class="svgTwo" width="40" height="40" viewBox="11.5 11 37 37" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M44.288 41.123c6.468-7.717 5.46-19.225-2.249-25.702-7.71-6.478-19.202-5.472-25.67 2.246-6.467 7.717-5.46 19.225 2.249 25.702 7.71 6.477 19.202 5.472 25.67-2.246ZM31.198 27.98a.456.456 0 0 1 .51.43l.34 6.74a1.368 1.368 0 1 0 2.73-.137l-.34-6.74a3.19 3.19 0 0 0-3.58-3.008l-6.689.835a1.367 1.367 0 0 0 .34 2.716l6.688-.836Z" fill="#EEE"/></svg>
                            </span>
                            <div class="homeInnerProjectCardGradient">
                            <h3>پروژه پرواز</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و گرافیک است چاپگر ها و متون بلکه روزنامه است</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="mainHomeRequest">
            <h2>پروژه های ما</h2>
            <span>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</span>
            <div class="mainHomeRequestInnerText">
                <div class="mainHomeRequestInnerForm">
                    <?php echo do_shortcode('[contact-form-7 id="554d9f0" title="درخواست"]') ?>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/img/ou9.png">
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>