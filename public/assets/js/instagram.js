"use strict";

const responsiveOptions =[{"breakpoint":480,"settings":{"slidesToShow":2,"slidesMargin":"10"}},{"breakpoint":768,"settings":{"slidesToShow":3,"slidesMargin":"10"}},{"breakpoint":992,"settings":{"slidesToShow":4,"slidesMargin":"15"}},{"breakpoint":1200,"settings":{"slidesToShow":4,"slidesMargin":"15"}},{"breakpoint":1500,"settings":{"slidesToShow":4,"slidesMargin":"15"}}]
const options = {"arrows":true,"slidesMargin":15,"dots":true,"infinite":false,"speed":300,"slidesToShow":4,"rows":1, "responive": responsiveOptions};
const PostFields = ['media_url','caption','permalink'];

/* Javascript Implementation */
// const url = `https://graph.instagram.com/me/media?fields=${PostFields.join(',')}&limit=10&access_token=${TOKEN_3}`;

const InstagramCard = (media_url, permalink, caption) => {
    return (`
<div class="rows-space-0">
    <a target="_blank" href="${permalink}" class="item" tabindex="0">
        <img class="img-responsive lazy" src="${media_url}" alt="${caption && 'Prisma Joyeria'}">
        <span class="instagram-info">
             <span class="social-wrap">
                <span class="social-info" style="color:#ffffff;">
                <svg style="height: 2rem; fill: #ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                </span>
            </span>
        </span>
    </a>
</div>
`
    );
}

const ShowInstaPost = ({data}) => {
    let PostList = [];
    data.forEach( ({media_url, permalink, caption}) => {
        PostList.push(InstagramCard(media_url, permalink, caption)); 
    });

    console.log(options);

    const InstagramContainer = document.getElementById('instaGrid');

    const SlickContainer = `<div class="instagram-owl owl-slick" id="slick-container-custom">
                                ${PostList.join('')}
                            </div>`
    
    InstagramContainer.innerHTML = SlickContainer;

    $('#slick-container-custom').slick(options);

}


const getInstaMedia = async (URI_ = null) => {
    try {
        /* Javascript Implementation */
        // const response = await fetch(URI_);
        // const data = await response.json();
        // console.log(data);

        /* Php Implementation */
        const responsePHP = await fetch('/instagram.php');
        const dataPHP = await responsePHP.json();
        console.log(dataPHP);
        
        ShowInstaPost(dataPHP);
    } catch (error) {
        console.warn(error);
    }
}



document.addEventListener('DOMContentLoaded', () => {
    /* Javascript Implementation */
        // getInstaMedia(url);
    /* Php Implementation */
        getInstaMedia();
})

