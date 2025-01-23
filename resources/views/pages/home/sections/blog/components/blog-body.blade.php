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
                            <time class="blog-card_date" datetime="2023-10-15">October 15, 2023</time>
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
                                            <span class="blog-actions__icon-wrapper"><img
                                                    src="{{ asset('icons/blog/blog4.svg') }}" alt=""></span>
                                            <span>24.5k</span>
                                        </button>
                                    </li>
                                    <li class="blog-actions__item">
                                        <button class="blog-actions__button " type="button" aria-label="Discuss"
                                            title="Discuss">
                                            <span class="blog-actions__icon-wrapper"><img
                                                    src="{{ asset('icons/blog/blog5.svg') }}" alt=""></span>
                                            <span>50</span>
                                        </button>
                                    </li>
                                    <li class="blog-actions__item">
                                        <button class="blog-actions__button " type="button" aria-label="Share"
                                            title="Share">
                                            <span class="blog-actions__icon-wrapper"><img
                                                    src="{{ asset('icons/blog/blog6.svg') }}" alt=""></span>
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
                            <time class="blog-card_date" datetime="2023-10-15">November 5, 2023</time>
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
                                            <span class="blog-actions__icon-wrapper"><img
                                                    src="{{ asset('icons/blog/blog4.svg') }}" alt=""></span>
                                            <span>32k</span>
                                        </button>
                                    </li>
                                    <li class="blog-actions__item">
                                        <button class="blog-actions__button " type="button" aria-label="Discuss"
                                            title="Discuss">
                                            <span class="blog-actions__icon-wrapper"><img
                                                    src="{{ asset('icons/blog/blog5.svg') }}" alt=""></span>
                                            <span>72</span>
                                        </button>
                                    </li>
                                    <li class="blog-actions__item">
                                        <button class="blog-actions__button " type="button" aria-label="Share"
                                            title="Share">
                                            <span class="blog-actions__icon-wrapper"><img
                                                    src="{{ asset('icons/blog/blog6.svg') }}" alt=""></span>
                                            <span>18</span>
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
                            <time class="blog-card_date" datetime="2023-10-15">December 10, 2023</time>
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
                                            <span class="blog-actions__icon-wrapper"><img
                                                    src="{{ asset('icons/blog/blog4.svg') }}" alt=""></span>
                                            <span>20k</span>
                                        </button>
                                    </li>
                                    <li class="blog-actions__item">
                                        <button class="blog-actions__button " type="button" aria-label="Discuss"
                                            title="Discuss">
                                            <span class="blog-actions__icon-wrapper"><img
                                                    src="{{ asset('icons/blog/blog5.svg') }}" alt=""></span>
                                            <span>31</span>
                                        </button>
                                    </li>
                                    <li class="blog-actions__item">
                                        <button class="blog-actions__button " type="button" aria-label="Share"
                                            title="Share">
                                            <span class="blog-actions__icon-wrapper"><img
                                                    src="{{ asset('icons/blog/blog6.svg') }}" alt=""></span>
                                            <span>12</span>
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
