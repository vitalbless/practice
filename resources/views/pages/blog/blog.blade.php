@extends('app')

@section('title', 'Blog')

@section('content')
    <section class="blog-details" aria-labelledby="blog-details-title">
        <header class="blog-details__banner" style="--bgImg: url('../../../../public/icons/blog-details/banner.jpg')">
            <div class="blog-details__banner-inner container">
                <h1 class="blog-details__title" id="blog-details-title">
                    The Rise of Artificial Intelligence in Healthcare
                </h1>
            </div>
        </header>
        <div class="blog-details__body">
            <div class="blog-details__body-inner container">
                <div class="blog-details__content">
                    <div class="blog-details__intro full-vw-line full-vw-line--bottom full-vw-line--left">
                        <h2 class="h6">Introduction</h2>
                        <p>Artificial Intelligence (AI) has emerged as a transformative force in the healthcare industry,
                            reshaping patient care, diagnostics, and research. In this blog post, we explore the profound
                            impact of AI in healthcare, from revolutionizing diagnostic accuracy to enhancing patient
                            outcomes.</p>
                    </div>
                    <div class="blog-details__main expandable-content" data-js-expandable-content>
                        <h2 class="h4">Artificial Intelligence (AI)</h2>
                        <p>Artificial Intelligence (AI) has permeated virtually every aspect of our lives, and healthcare is
                            no exception. The integration of AI in healthcare is ushering in a new era of medical practice,
                            where machines complement the capabilities of healthcare professionals, ultimately improving
                            patient outcomes and the efficiency of the healthcare system. In this blog post, we will delve
                            into the diverse applications of AI in healthcare, from diagnostic imaging to personalized
                            treatment plans, and address the ethical considerations surrounding this revolutionary
                            technology.</p>
                        <p>Artificial Intelligence (AI) has permeated virtually every aspect of our lives, and healthcare is
                            no exception. The integration of AI in healthcare is ushering in a new era of medical practice,
                            where machines complement the capabilities of healthcare professionals, ultimately improving
                            patient outcomes and the efficiency of the healthcare system. In this blog post, we will delve
                            into the diverse applications of AI in healthcare, from diagnostic imaging to personalized
                            treatment plans, and address the ethical considerations surrounding this revolutionary
                            technology.</p>
                        <h2 class="h4">Predictive Analytics and Disease Prevention</h2>
                        <p>One of the most prominent applications of AI in healthcare is in diagnostic imaging. AI
                            algorithms have demonstrated remarkable proficiency in interpreting medical images such as
                            X-rays, MRIs, and CT scans. They can identify anomalies and deviations that might be overlooked
                            by the human eye. This is particularly valuable in early disease detection. For instance, AI can
                            aid radiologists in detecting minute irregularities in mammograms or identifying critical
                            findings in chest X-rays, potentially indicative of life-threatening conditions.</p>
                        <p>One of the most prominent applications of AI in healthcare is in diagnostic imaging. AI
                            algorithms have demonstrated remarkable proficiency in interpreting medical images such as
                            X-rays, MRIs, and CT scans. They can identify anomalies and deviations that might be overlooked
                            by the human eye. This is particularly valuable in early disease detection. For instance, AI can
                            aid radiologists in detecting minute irregularities in mammograms or identifying critical
                            findings in chest X-rays, potentially indicative of life-threatening conditions.</p>
                        <p>One of the most prominent applications of AI in healthcare is in diagnostic imaging. AI
                            algorithms have demonstrated remarkable proficiency in interpreting medical images such as
                            X-rays, MRIs, and CT scans. They can identify anomalies and deviations that might be overlooked
                            by the human eye. This is particularly valuable in early disease detection. For instance, AI can
                            aid radiologists in detecting minute irregularities in mammograms or identifying critical
                            findings in chest X-rays, potentially indicative of life-threatening conditions.</p>
                        <p>One of the most prominent applications of AI in healthcare is in diagnostic imaging. AI
                            algorithms have demonstrated remarkable proficiency in interpreting medical images such as
                            X-rays, MRIs, and CT scans. They can identify anomalies and deviations that might be overlooked
                            by the human eye. This is particularly valuable in early disease detection. For instance, AI can
                            aid radiologists in detecting minute irregularities in mammograms or identifying critical
                            findings in chest X-rays, potentially indicative of life-threatening conditions.</p>
                        <button class="blog-details__read-full-button button expandable-content__button" type="button"
                            data-js-expandable-content-button>
                            <span class="icon icon--gray-arrow-down">Read Full Blog</span>
                        </button>
                    </div>
                </div>
                <div class="blog-details__info">
                    <div class="blog-details__actions blog-actions full-vw-line full-vw-line--bottom full-vw-line--right">
                        <ul class="blog-actions__list">
                            <li class="blog-actions__item">
                                <button class="blog-actions__button is-active" type="button" aria-label="Dislike"
                                    title="Dislike">
                                    <span class="blog-actions__icon-wrapper">
                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.645 21.4107L11.6384 21.4071L11.6158 21.3949C11.5965 21.3844 11.5689 21.3693 11.5336 21.3496C11.4629 21.3101 11.3612 21.2524 11.233 21.1769C10.9765 21.0261 10.6132 20.8039 10.1785 20.515C9.31074 19.9381 8.15122 19.0901 6.9886 18.0063C4.68781 15.8615 2.25 12.6751 2.25 8.75C2.25 5.82194 4.7136 3.5 7.6875 3.5C9.43638 3.5 11.0023 4.29909 12 5.5516C12.9977 4.29909 14.5636 3.5 16.3125 3.5C19.2864 3.5 21.75 5.82194 21.75 8.75C21.75 12.6751 19.3122 15.8615 17.0114 18.0063C15.8488 19.0901 14.6893 19.9381 13.8215 20.515C13.3868 20.8039 13.0235 21.0261 12.767 21.1769C12.6388 21.2524 12.5371 21.3101 12.4664 21.3496C12.4311 21.3693 12.4035 21.3844 12.3842 21.3949L12.3616 21.4071L12.355 21.4107L12.3523 21.4121C12.1323 21.5289 11.8677 21.5289 11.6477 21.4121L11.645 21.4107Z"
                                                stroke="#666666" stroke-width="1.5" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>24.5k</span>
                                </button>
                            </li>
                            <li class="blog-actions__item">
                                <button class="blog-actions__button" type="button" aria-label="Discuss" title="Discuss">
                                    <span class="blog-actions__icon-wrapper">
                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.48581 19.6888C9.54657 20.2083 10.7392 20.5 12 20.5C16.4183 20.5 20 16.9183 20 12.5C20 8.08172 16.4183 4.5 12 4.5C7.58172 4.5 4 8.08172 4 12.5C4 14.1401 4.49356 15.665 5.34026 16.9341M8.48581 19.6888L4 20.5L5.34026 16.9341M8.48581 19.6888L8.49231 19.6877M5.34026 16.9341L5.34154 16.9308"
                                                stroke="#666666" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>50</span>
                                </button>
                            </li>
                            <li class="blog-actions__item">
                                <button class="blog-actions__button" type="button" aria-label="Share" title="Share">
                                    <span class="blog-actions__icon-wrapper">
                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.0384 14.4616L4.1719 11.7951C3.36454 11.4281 3.39898 10.2697 4.22673 9.95134L18.8999 4.30781C19.7087 3.99675 20.5033 4.79139 20.1922 5.60013L14.5487 20.2733C14.2303 21.1011 13.072 21.1355 12.705 20.3281L10.0384 14.4616ZM10.0384 14.4616L14.4231 10.077"
                                                stroke="#666666" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>20</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-details__summary summary summary--2-cols">
                        <dl class="summary__list">
                            <div class="summary__item">
                                <dt class="summary__key">Publication Date</dt>
                                <dd class="summary__value"><time datetime="2023-10-15">October 15, 2023</time></dd>
                            </div>
                            <div class="summary__item">
                                <dt class="summary__key">Category</dt>
                                <dd class="summary__value">Healthcare</dd>
                            </div>
                            <div class="summary__item">
                                <dt class="summary__key">Reading Time</dt>
                                <dd class="summary__value">10 Min</dd>
                            </div>
                            <div class="summary__item">
                                <dt class="summary__key">Author Name</dt>
                                <dd class="summary__value">Dr. Emily Walker</dd>
                            </div>
                            <div class="summary__item summary__item--wide">
                                <dt class="summary__key">Table of Contents</dt>
                                <dd class="summary__value">
                                    <div class="table-of-contents">
                                        <ul class="table-of-contents__list">
                                            <li class="table-of-contents__item">Introduction</li>
                                            <li class="table-of-contents__item">AI in Diagnostic Imaging</li>
                                            <li class="table-of-contents__item">Predictive Analytics and Disease Prevention
                                            </li>
                                            <li class="table-of-contents__item">Personalized Treatment Plans</li>
                                            <li class="table-of-contents__item">Drug Discovery and Research</li>
                                            <li class="table-of-contents__item">AI in Telemedicine</li>
                                            <li class="table-of-contents__item">Ethical Considerations</li>
                                            <li class="table-of-contents__item">The Future of AI in Healthcare</li>
                                            <li class="table-of-contents__item">Conclusion</li>
                                        </ul>
                                    </div>
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-details__news news container">
            <header class="news__header">
                <h2 class="news__title h4">Similar News</h2>
                <a class="news__link button" href="/">
                    <span class="icon icon--yellow-arrow">View All News</span>
                </a>
            </header>
            <ul class="news__list">
                <li class="news__item">
                    <article class="news-card">
                        <img class="news-card__image" src="{{ asset('icons/news/2.jpg') }}" alt=""
                            width="512" height="222" loading="lazy" />
                        <div class="news-card__body">
                            <h2 class="news-card__title h6">A Decisive Victory for Progressive Policies</h2>
                            <div class="news-card__description">
                                <p>Politics</p>
                            </div>
                        </div>
                        <div class="news-card__controls">
                            <div class="news-card__actions blog-actions">
                                <ul class="blog-actions__list">
                                    <li class="blog-actions__item">
                                        <button class="blog-actions__button" type="button" aria-label="Like"
                                            title="Like">
                                            <span class="blog-actions__icon-wrapper">
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.645 21.4107L11.6384 21.4071L11.6158 21.3949C11.5965 21.3844 11.5689 21.3693 11.5336 21.3496C11.4629 21.3101 11.3612 21.2524 11.233 21.1769C10.9765 21.0261 10.6132 20.8039 10.1785 20.515C9.31074 19.9381 8.15122 19.0901 6.9886 18.0063C4.68781 15.8615 2.25 12.6751 2.25 8.75C2.25 5.82194 4.7136 3.5 7.6875 3.5C9.43638 3.5 11.0023 4.29909 12 5.5516C12.9977 4.29909 14.5636 3.5 16.3125 3.5C19.2864 3.5 21.75 5.82194 21.75 8.75C21.75 12.6751 19.3122 15.8615 17.0114 18.0063C15.8488 19.0901 14.6893 19.9381 13.8215 20.515C13.3868 20.8039 13.0235 21.0261 12.767 21.1769C12.6388 21.2524 12.5371 21.3101 12.4664 21.3496C12.4311 21.3693 12.4035 21.3844 12.3842 21.3949L12.3616 21.4071L12.355 21.4107L12.3523 21.4121C12.1323 21.5289 11.8677 21.5289 11.6477 21.4121L11.645 21.4107Z"
                                                        stroke="#666666" stroke-width="1.5" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            <span>14k</span>
                                        </button>
                                    </li>
                                    <li class="blog-actions__item">
                                        <button class="blog-actions__button" type="button" aria-label="Share"
                                            title="Share">
                                            <span class="blog-actions__icon-wrapper">
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.0384 14.4616L4.1719 11.7951C3.36454 11.4281 3.39898 10.2697 4.22673 9.95134L18.8999 4.30781C19.7087 3.99675 20.5033 4.79139 20.1922 5.60013L14.5487 20.2733C14.2303 21.1011 13.072 21.1355 12.705 20.3281L10.0384 14.4616ZM10.0384 14.4616L14.4231 10.077"
                                                        stroke="#666666" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            <span>204</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <a class="news-card__link button" href="/">
                                <span class="icon icon--yellow-arrow">Read More</span>
                            </a>
                        </div>
                    </article>
                </li>
                <li class="news__item">
                    <article class="news-card">
                        <img class="news-card__image" src="{{ asset('icons/news/3.jpg') }}" alt=""
                            width="512" height="222" loading="lazy" />
                        <div class="news-card__body">
                            <h2 class="news-card__title h6">Tech Giants Unveil Cutting-Edge AI Innovations</h2>
                            <div class="news-card__description">
                                <p>Technology</p>
                            </div>
                        </div>
                        <div class="news-card__controls">
                            <div class="news-card__actions blog-actions">
                                <ul class="blog-actions__list">
                                    <li class="blog-actions__item">
                                        <button class="blog-actions__button" type="button" aria-label="Like"
                                            title="Like">
                                            <span class="blog-actions__icon-wrapper">
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.645 21.4107L11.6384 21.4071L11.6158 21.3949C11.5965 21.3844 11.5689 21.3693 11.5336 21.3496C11.4629 21.3101 11.3612 21.2524 11.233 21.1769C10.9765 21.0261 10.6132 20.8039 10.1785 20.515C9.31074 19.9381 8.15122 19.0901 6.9886 18.0063C4.68781 15.8615 2.25 12.6751 2.25 8.75C2.25 5.82194 4.7136 3.5 7.6875 3.5C9.43638 3.5 11.0023 4.29909 12 5.5516C12.9977 4.29909 14.5636 3.5 16.3125 3.5C19.2864 3.5 21.75 5.82194 21.75 8.75C21.75 12.6751 19.3122 15.8615 17.0114 18.0063C15.8488 19.0901 14.6893 19.9381 13.8215 20.515C13.3868 20.8039 13.0235 21.0261 12.767 21.1769C12.6388 21.2524 12.5371 21.3101 12.4664 21.3496C12.4311 21.3693 12.4035 21.3844 12.3842 21.3949L12.3616 21.4071L12.355 21.4107L12.3523 21.4121C12.1323 21.5289 11.8677 21.5289 11.6477 21.4121L11.645 21.4107Z"
                                                        stroke="#666666" stroke-width="1.5" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            <span>14k</span>
                                        </button>
                                    </li>
                                    <li class="blog-actions__item">
                                        <button class="blog-actions__button" type="button" aria-label="Share"
                                            title="Share">
                                            <span class="blog-actions__icon-wrapper">
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.0384 14.4616L4.1719 11.7951C3.36454 11.4281 3.39898 10.2697 4.22673 9.95134L18.8999 4.30781C19.7087 3.99675 20.5033 4.79139 20.1922 5.60013L14.5487 20.2733C14.2303 21.1011 13.072 21.1355 12.705 20.3281L10.0384 14.4616ZM10.0384 14.4616L14.4231 10.077"
                                                        stroke="#666666" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            <span>204</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <a class="news-card__link button" href="/">
                                <span class="icon icon--yellow-arrow">Read More</span>
                            </a>
                        </div>
                    </article>
                </li>
                <li class="news__item">
                    <article class="news-card">
                        <img class="news-card__image" src="{{ asset('icons/news/1.jpg') }}" alt=""
                            width="512" height="222" loading="lazy" />
                        <div class="news-card__body">
                            <h2 class="news-card__title h6">COVID-19 Variants</h2>
                            <div class="news-card__description">
                                <p>Health</p>
                            </div>
                        </div>
                        <div class="news-card__controls">
                            <div class="news-card__actions blog-actions">
                                <ul class="blog-actions__list">
                                    <li class="blog-actions__item">
                                        <button class="blog-actions__button" type="button" aria-label="Like"
                                            title="Like">
                                            <span class="blog-actions__icon-wrapper">
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.645 21.4107L11.6384 21.4071L11.6158 21.3949C11.5965 21.3844 11.5689 21.3693 11.5336 21.3496C11.4629 21.3101 11.3612 21.2524 11.233 21.1769C10.9765 21.0261 10.6132 20.8039 10.1785 20.515C9.31074 19.9381 8.15122 19.0901 6.9886 18.0063C4.68781 15.8615 2.25 12.6751 2.25 8.75C2.25 5.82194 4.7136 3.5 7.6875 3.5C9.43638 3.5 11.0023 4.29909 12 5.5516C12.9977 4.29909 14.5636 3.5 16.3125 3.5C19.2864 3.5 21.75 5.82194 21.75 8.75C21.75 12.6751 19.3122 15.8615 17.0114 18.0063C15.8488 19.0901 14.6893 19.9381 13.8215 20.515C13.3868 20.8039 13.0235 21.0261 12.767 21.1769C12.6388 21.2524 12.5371 21.3101 12.4664 21.3496C12.4311 21.3693 12.4035 21.3844 12.3842 21.3949L12.3616 21.4071L12.355 21.4107L12.3523 21.4121C12.1323 21.5289 11.8677 21.5289 11.6477 21.4121L11.645 21.4107Z"
                                                        stroke="#666666" stroke-width="1.5" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            <span>14k</span>
                                        </button>
                                    </li>
                                    <li class="blog-actions__item">
                                        <button class="blog-actions__button" type="button" aria-label="Share"
                                            title="Share">
                                            <span class="blog-actions__icon-wrapper">
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.0384 14.4616L4.1719 11.7951C3.36454 11.4281 3.39898 10.2697 4.22673 9.95134L18.8999 4.30781C19.7087 3.99675 20.5033 4.79139 20.1922 5.60013L14.5487 20.2733C14.2303 21.1011 13.072 21.1355 12.705 20.3281L10.0384 14.4616ZM10.0384 14.4616L14.4231 10.077"
                                                        stroke="#666666" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            <span>204</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <a class="news-card__link button" href="/">
                                <span class="icon icon--yellow-arrow">Read More</span>
                            </a>
                        </div>
                    </article>
                </li>
            </ul>
        </div>
    </section>
@endsection
