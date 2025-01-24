<div class="section__body tabs" data-js-tabs>
    <h3 class="visually-hidden" id="blog-category-title">Blog category</h3>
    <header class="tabs__header">
        <div class="tabs__buttons container" role="tablist" aria-labelledby="blog-category-title">
            <button class="tabs__button is-active" id="tab-1" type="button" role="tab" aria-controls="tabpanel-1"
                data-js-tabs-button aria-selected="false">All</button>
            <button class="tabs__button" id="tab-2" type="button" role="tab" aria-controls="tabpanel-2"
                data-js-tabs-button aria-selected="false" tabindex="-1">Quantum Computing</button>
            <button class="tabs__button" id="tab-3" type="button" role="tab" aria-controls="tabpanel-3"
                data-js-tabs-button aria-selected="false" tabindex="-1">AI Ethics</button>
            <button class="tabs__button" id="tab-4" type="button" role="tab" aria-controls="tabpanel-4"
                data-js-tabs-button aria-selected="false" tabindex="-1">Space Exploration</button>
            <button class="tabs__button" id="tab-5" type="button" role="tab" aria-controls="tabpanel-5"
                data-js-tabs-button aria-selected="false" tabindex="-1">Biotechnology</button>
            <button class="tabs__button" id="tab-6" type="button" role="tab" aria-controls="tabpanel-6"
                data-js-tabs-button aria-selected="false" tabindex="-1">Renewable Energy</button>
        </div>
    </header>
    <div class="tabs__body">
        <div class="tabs__content is-active" id="tabpanel-1" aria-labelledby="tab-1" tabindex="0"
            data-js-tabs-content>
            <ul class="list">
                <li class="list__item">
                    <article class="blog-card container">
                        <div class="blog-card__author person-card">
                            <img src="{{ asset('icons/blog/blog1.png') }}" alt="" class="person-card__image"
                                width="80" height="80" loading='lazy'>
                            <div class="person-card__body">
                                <p class="person-card__name">John Techson</p>
                                <p class="person-card__department">Quantum Computing</p>
                            </div>
                        </div>
                        <div class="blog-card__body">
                            <time class="blog-card_date h6" datetime="2023-10-15">October 15, 2023</time>
                            <div class="blog-card__info">
                                <h4 class="blog-card__title">The Quantum Leap in Computing</h4>
                                <div class="blog-card__description">
                                    <p>Explore the revolution in quantum computing, its applications, and its potential
                                        impact on various industries.</p>
                                </div>
                            </div>
                            <div class="blog-card__actions blog-actions">
                                <ul class="blog-actions__list">
                                    <li class="blog-actions__item">
                                        <button class="blog-actions__button is-active" type="button"
                                            aria-label="Dislike" title="Dislike">
                                            <span class="blog-actions__icon-wrapper"><svg width="22" height="21"
                                                    viewBox="0 0 22 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.645 19.4107L10.6384 19.4071L10.6158 19.3949C10.5965 19.3844 10.5689 19.3693 10.5336 19.3496C10.4629 19.3101 10.3612 19.2524 10.233 19.1769C9.9765 19.0261 9.61317 18.8039 9.17855 18.515C8.31074 17.9381 7.15122 17.0901 5.9886 16.0063C3.68781 13.8615 1.25 10.6751 1.25 6.75C1.25 3.82194 3.7136 1.5 6.6875 1.5C8.43638 1.5 10.0023 2.29909 11 3.5516C11.9977 2.29909 13.5636 1.5 15.3125 1.5C18.2864 1.5 20.75 3.82194 20.75 6.75C20.75 10.6751 18.3122 13.8615 16.0114 16.0063C14.8488 17.0901 13.6893 17.9381 12.8215 18.515C12.3868 18.8039 12.0235 19.0261 11.767 19.1769C11.6388 19.2524 11.5371 19.3101 11.4664 19.3496C11.4311 19.3693 11.4035 19.3844 11.3842 19.3949L11.3616 19.4071L11.355 19.4107L11.3523 19.4121C11.1323 19.5289 10.8677 19.5289 10.6477 19.4121L10.645 19.4107Z"
                                                        stroke="#666666" stroke-width="1.5" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            <span>24.5k</span>
                                        </button>
                                    </li>
                                    <li class="blog-actions__item">
                                        <button class="blog-actions__button " type="button" aria-label="Discuss"
                                            title="Discuss">
                                            <span class="blog-actions__icon-wrapper"> <svg width="18" height="19"
                                                    viewBox="0 0 18 19" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.48581 16.6888C6.54657 17.2083 7.73922 17.5 9 17.5C13.4183 17.5 17 13.9183 17 9.5C17 5.08172 13.4183 1.5 9 1.5C4.58172 1.5 1 5.08172 1 9.5C1 11.1401 1.49356 12.665 2.34026 13.9341M5.48581 16.6888L1 17.5L2.34026 13.9341M5.48581 16.6888L5.49231 16.6877M2.34026 13.9341L2.34154 13.9308"
                                                        stroke="#666666" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            <span>50</span>
                                        </button>
                                    </li>
                                    <li class="blog-actions__item">
                                        <button class="blog-actions__button " type="button" aria-label="Share"
                                            title="Share">
                                            <span class="blog-actions__icon-wrapper"><svg width="20"
                                                    height="19" viewBox="0 0 20 19" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.03841 11.4616L2.1719 8.79505C1.36454 8.42807 1.39898 7.2697 2.22673 6.95134L16.8999 1.30781C17.7087 0.996752 18.5033 1.79139 18.1922 2.60013L12.5487 17.2733C12.2303 18.1011 11.072 18.1355 10.705 17.3281L8.03841 11.4616ZM8.03841 11.4616L12.4231 7.07704"
                                                        stroke="#666666" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            <span>20</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="/" class="blog-card__link button">
                            <span class="icon icon--yellow-arrow">View Blog</span>
                        </a>
                    </article>
                </li>
                <li class="list__item">
                    <article class="blog-card container">
                        <div class="blog-card__author person-card">
                            <img src="{{ asset('icons/blog/blog2.png') }}" alt="" class="person-card__image"
                                width="80" height="80" loading='lazy'>
                            <div class="person-card__body">
                                <p class="person-card__name">Sarah Ethicist</p>
                                <p class="person-card__department">AI Ethics</p>
                            </div>
                        </div>
                        <div class="blog-card__body">
                            <time class="blog-card_date h6" datetime="2023-10-15">November 5, 2023</time>
                            <div class="blog-card__info">
                                <h4 class="blog-card__title">The Ethical Dilemmas of AI</h4>
                                <div class="blog-card__description">
                                    <p>A deep dive into ethical challenges posed by AI, including bias, privacy, and
                                        transparency.</p>
                                </div>
                            </div>
                            <div class="blog-card__actions blog-actions">
                                <ul class="blog-actions__list">
                                    <li class="blog-actions__item">
                                        <button class="blog-actions__button is-active" type="button"
                                            aria-label="Dislike" title="Dislike">
                                            <span class="blog-actions__icon-wrapper"><svg width="22"
                                                    height="21" viewBox="0 0 22 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.645 19.4107L10.6384 19.4071L10.6158 19.3949C10.5965 19.3844 10.5689 19.3693 10.5336 19.3496C10.4629 19.3101 10.3612 19.2524 10.233 19.1769C9.9765 19.0261 9.61317 18.8039 9.17855 18.515C8.31074 17.9381 7.15122 17.0901 5.9886 16.0063C3.68781 13.8615 1.25 10.6751 1.25 6.75C1.25 3.82194 3.7136 1.5 6.6875 1.5C8.43638 1.5 10.0023 2.29909 11 3.5516C11.9977 2.29909 13.5636 1.5 15.3125 1.5C18.2864 1.5 20.75 3.82194 20.75 6.75C20.75 10.6751 18.3122 13.8615 16.0114 16.0063C14.8488 17.0901 13.6893 17.9381 12.8215 18.515C12.3868 18.8039 12.0235 19.0261 11.767 19.1769C11.6388 19.2524 11.5371 19.3101 11.4664 19.3496C11.4311 19.3693 11.4035 19.3844 11.3842 19.3949L11.3616 19.4071L11.355 19.4107L11.3523 19.4121C11.1323 19.5289 10.8677 19.5289 10.6477 19.4121L10.645 19.4107Z"
                                                        stroke="#666666" stroke-width="1.5"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            <span>24.5k</span>
                                        </button>
                                    </li>
                                    <li class="blog-actions__item">
                                        <button class="blog-actions__button " type="button" aria-label="Discuss"
                                            title="Discuss">
                                            <span class="blog-actions__icon-wrapper"> <svg width="18"
                                                    height="19" viewBox="0 0 18 19" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.48581 16.6888C6.54657 17.2083 7.73922 17.5 9 17.5C13.4183 17.5 17 13.9183 17 9.5C17 5.08172 13.4183 1.5 9 1.5C4.58172 1.5 1 5.08172 1 9.5C1 11.1401 1.49356 12.665 2.34026 13.9341M5.48581 16.6888L1 17.5L2.34026 13.9341M5.48581 16.6888L5.49231 16.6877M2.34026 13.9341L2.34154 13.9308"
                                                        stroke="#666666" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            <span>50</span>
                                        </button>
                                    </li>
                                    <li class="blog-actions__item">
                                        <button class="blog-actions__button " type="button" aria-label="Share"
                                            title="Share">
                                            <span class="blog-actions__icon-wrapper"><svg width="20"
                                                    height="19" viewBox="0 0 20 19" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.03841 11.4616L2.1719 8.79505C1.36454 8.42807 1.39898 7.2697 2.22673 6.95134L16.8999 1.30781C17.7087 0.996752 18.5033 1.79139 18.1922 2.60013L12.5487 17.2733C12.2303 18.1011 11.072 18.1355 10.705 17.3281L8.03841 11.4616ZM8.03841 11.4616L12.4231 7.07704"
                                                        stroke="#666666" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            <span>20</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="/" class="blog-card__link button">
                            <span class="icon icon--yellow-arrow">View Blog</span>
                        </a>
                    </article>
                </li>
                <li class="list__item">
                    <article class="blog-card container">
                        <div class="blog-card__author person-card">
                            <img src="{{ asset('icons/blog/blog3.png') }}" alt="" class="person-card__image"
                                width="80" height="80" loading='lazy'>
                            <div class="person-card__body">
                                <p class="person-card__name">Astronomer X</p>
                                <p class="person-card__department">Space Exploration</p>
                            </div>
                        </div>
                        <div class="blog-card__body">
                            <time class="blog-card_date h6" datetime="2023-10-15">December 10, 2023</time>
                            <div class="blog-card__info">
                                <h4 class="blog-card__title">The Mars Colonization Challenge</h4>
                                <div class="blog-card__description">
                                    <p>Exploring the technical and logistical challenges of human colonization on Mars.
                                    </p>
                                </div>
                            </div>
                            <div class="blog-card__actions blog-actions">
                                <ul class="blog-actions__list">
                                    <li class="blog-actions__item">
                                        <button class="blog-actions__button is-active" type="button"
                                            aria-label="Dislike" title="Dislike">
                                            <span class="blog-actions__icon-wrapper"><svg width="22"
                                                    height="21" viewBox="0 0 22 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.645 19.4107L10.6384 19.4071L10.6158 19.3949C10.5965 19.3844 10.5689 19.3693 10.5336 19.3496C10.4629 19.3101 10.3612 19.2524 10.233 19.1769C9.9765 19.0261 9.61317 18.8039 9.17855 18.515C8.31074 17.9381 7.15122 17.0901 5.9886 16.0063C3.68781 13.8615 1.25 10.6751 1.25 6.75C1.25 3.82194 3.7136 1.5 6.6875 1.5C8.43638 1.5 10.0023 2.29909 11 3.5516C11.9977 2.29909 13.5636 1.5 15.3125 1.5C18.2864 1.5 20.75 3.82194 20.75 6.75C20.75 10.6751 18.3122 13.8615 16.0114 16.0063C14.8488 17.0901 13.6893 17.9381 12.8215 18.515C12.3868 18.8039 12.0235 19.0261 11.767 19.1769C11.6388 19.2524 11.5371 19.3101 11.4664 19.3496C11.4311 19.3693 11.4035 19.3844 11.3842 19.3949L11.3616 19.4071L11.355 19.4107L11.3523 19.4121C11.1323 19.5289 10.8677 19.5289 10.6477 19.4121L10.645 19.4107Z"
                                                        stroke="#666666" stroke-width="1.5"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            <span>24.5k</span>
                                        </button>
                                    </li>
                                    <li class="blog-actions__item">
                                        <button class="blog-actions__button " type="button" aria-label="Discuss"
                                            title="Discuss">
                                            <span class="blog-actions__icon-wrapper"> <svg width="18"
                                                    height="19" viewBox="0 0 18 19" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.48581 16.6888C6.54657 17.2083 7.73922 17.5 9 17.5C13.4183 17.5 17 13.9183 17 9.5C17 5.08172 13.4183 1.5 9 1.5C4.58172 1.5 1 5.08172 1 9.5C1 11.1401 1.49356 12.665 2.34026 13.9341M5.48581 16.6888L1 17.5L2.34026 13.9341M5.48581 16.6888L5.49231 16.6877M2.34026 13.9341L2.34154 13.9308"
                                                        stroke="#666666" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            <span>50</span>
                                        </button>
                                    </li>
                                    <li class="blog-actions__item">
                                        <button class="blog-actions__button " type="button" aria-label="Share"
                                            title="Share">
                                            <span class="blog-actions__icon-wrapper"><svg width="20"
                                                    height="19" viewBox="0 0 20 19" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.03841 11.4616L2.1719 8.79505C1.36454 8.42807 1.39898 7.2697 2.22673 6.95134L16.8999 1.30781C17.7087 0.996752 18.5033 1.79139 18.1922 2.60013L12.5487 17.2733C12.2303 18.1011 11.072 18.1355 10.705 17.3281L8.03841 11.4616ZM8.03841 11.4616L12.4231 7.07704"
                                                        stroke="#666666" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            <span>20</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="/" class="blog-card__link button">
                            <span class="icon icon--yellow-arrow">View Blog</span>
                        </a>
                    </article>
                </li>
            </ul>
        </div>
        <div class="tabs__content" id="tabpanel-2" aria-labelledby="tab-2" tabindex="0" data-js-tabs-content>
        </div>
        <div class="tabs__content" id="tabpanel-3" aria-labelledby="tab-3" tabindex="0" data-js-tabs-content>
        </div>
        <div class="tabs__content" id="tabpanel-4" aria-labelledby="tab-4" tabindex="0" data-js-tabs-content>
        </div>
        <div class="tabs__content" id="tabpanel-5" aria-labelledby="tab-5" tabindex="0" data-js-tabs-content>
        </div>
        <div class="tabs__content" id="tabpanel-6" aria-labelledby="tab-6" tabindex="0" data-js-tabs-content>
        </div>
    </div>
</div>
