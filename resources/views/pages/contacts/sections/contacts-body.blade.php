<div class="contacts__body">
    <div class="list">
        <div class="list__item">
            <div class="card container">
                <div class="card__preview">
                    <div class="card__preview-main">
                        <img class="card__preview-icon" src="{{ asset('icons/hero/img-icon.svg') }}" alt=""
                            width="80" height="80" loading="lazy" />
                        <div class="card__preview-info">
                            <h2 class="card__preview-title">Get in Touch with AI Podcasts</h2>
                        </div>
                    </div>
                </div>
                <div class="card__body">
                    <form class="feedback-form" action="/">
                        <div class="feedback-form__cell field">
                            <label class="field__label" for="firstName">First Name <span class="field__required-star"
                                    aria-hidden="true">*</span></label>
                            <input class="field__control" id="firstName" placeholder="Ivan" required />
                        </div>
                        <div class="feedback-form__cell field">
                            <label class="field__label" for="lastName">Last Name</label>
                            <input class="field__control" id="lastName" placeholder="Ivanov" />
                        </div>
                        <div class="feedback-form__cell field">
                            <label class="field__label" for="email">Email <span class="field__required-star"
                                    aria-hidden="true">*</span></label>
                            <input class="field__control" id="email" placeholder="example@email.com" required
                                type="email" />
                        </div>
                        <div class="feedback-form__cell field">
                            <label class="field__label" for="phoneNumber">Phone Number</label>
                            <div class="field__body">
                                <div class="select" data-js-select>
                                    <label class="select__label visually-hidden" id="phone-number-prefix-select-label"
                                        for="phoneNumberPrefix">
                                        Phone number prefix
                                    </label>
                                    <select class="select__original-control field__control" id="phoneNumberPrefix"
                                        tabindex="-1" data-js-select-original-control>
                                        <option value="+7" selected>+7</option>
                                        <option value="+1">+1</option>
                                        <option value="+2">+2</option>
                                        <option value="+3">+3</option>
                                    </select>
                                    <div class="select__body">
                                        <div class="select__button field__control" tabindex="0" role="combobox"
                                            aria-expanded="false" aria-haspopup="listbox"
                                            aria-controls="phone-number-prefix-select-dropdown"
                                            aria-labelledby="phone-number-prefix-select-label" data-js-select-button>
                                            +7
                                        </div>
                                        <div class="select__dropdown" id="phone-number-prefix-select-dropdown"
                                            role="listbox" aria-labelledby="phone-number-prefix-select-label"
                                            data-js-select-dropdown>
                                            <div class="select__option is-selected is-current"
                                                id="phone-number-prefix-select-option-1" role="option"
                                                aria-selected="true" data-js-select-option>
                                                +7
                                            </div>
                                            <div class="select__option" id="phone-number-prefix-select-option-2"
                                                role="option" aria-selected="false" data-js-select-option>
                                                +1
                                            </div>
                                            <div class="select__option" id="phone-number-prefix-select-option-3"
                                                role="option" aria-selected="false" data-js-select-option>
                                                +2
                                            </div>
                                            <div class="select__option" id="phone-number-prefix-select-option-4"
                                                role="option" aria-selected="false" data-js-select-option>
                                                +3
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input class="field__control" id="phoneNumber" placeholder="(999) 999-99-99"
                                    data-js-input-mask="(000) 000-00-00" />
                            </div>
                        </div>
                        <div class="feedback-form__cell feedback-form__cell--wide field">
                            <label class="field__label" for="message">Message <span class="field__required-star"
                                    aria-hidden="true">*</span></label>
                            <textarea class="field__control" id="message" placeholder="Hi! I have an idea..." required></textarea>
                        </div>
                        <div class="feedback-form__cell feedback-form__cell--wide">
                            <div class="feedback-form__actions">
                                <div class="feedback-form__agreement">
                                    <label class="checkbox">
                                        <input class="checkbox__input" type="checkbox" required />
                                        <span class="checkbox__label">I agree with Terms of Use and Privacy
                                            Policy</span>
                                    </label>
                                </div>
                                <button class="feedback-form__submit-button button button--accent" type="submit">
                                    Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="list__item">
            <div class="card container">
                <div class="card__preview">
                    <div class="card__preview-main">
                        <img class="card__preview-icon" src="{{ asset('icons/hero/img-icon2.svg') }}" alt=""
                            width="80" height="80" loading="lazy" />
                        <div class="card__preview-info">
                            <h2 class="card__preview-title h3">Asked question</h2>
                            <div class="card__preview-description">
                                <p>If the question is not available on our FAQ section, Feel free to contact us
                                    personally, we will resolve your respective doubts. </p>
                            </div>
                        </div>
                        <a class="card__preview-link button button--dark-gray" href="/">
                            <span class="icon icon--yellow-arrow">Ask Qustion</span>
                        </a>
                    </div>
                </div>
                <div class="card__body">
                    <div class="accordion-group">
                        <div class="accordion tile">
                            <details class="accordion__details" name="faq" open>
                                <summary class="accordion__summary">
                                    <h4 class="accordion__title h6">
                                        <span role="term" aria-details="faq-1">What is AI?</span>
                                    </h4>
                                </summary>
                            </details>
                            <div class="accordion__content" id="faq-1" role="definition">
                                <div class="accordion__content-inner">
                                    <div class="accordion__content-body">
                                        <p>AI stands for Artificial Intelligence, which refers to the simulation of
                                            human intelligence in machines. It enables them to perform tasks like
                                            problem-solving, learning, and decision-making.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion tile">
                            <details class="accordion__details" name="faq">
                                <summary class="accordion__summary">
                                    <h4 class="accordion__title h6">
                                        <span role="term" aria-details="faq-2">How can I listen to your
                                            podcasts?</span>
                                    </h4>
                                </summary>
                            </details>
                            <div class="accordion__content" id="faq-2" role="definition">
                                <div class="accordion__content-inner">
                                    <div class="accordion__content-body">
                                        <p>AI stands for Artificial Intelligence, which refers to the simulation of
                                            human intelligence in machines. It enables them to perform tasks like
                                            problem-solving, learning, and decision-making.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion tile">
                            <details class="accordion__details" name="faq">
                                <summary class="accordion__summary">
                                    <h4 class="accordion__title h6">
                                        <span role="term" aria-details="faq-3">Are your podcasts free to listen
                                            to?</span>
                                    </h4>
                                </summary>
                            </details>
                            <div class="accordion__content" id="faq-3" role="definition">
                                <div class="accordion__content-inner">
                                    <div class="accordion__content-body">
                                        <p>AI stands for Artificial Intelligence, which refers to the simulation of
                                            human intelligence in machines. It enables them to perform tasks like
                                            problem-solving, learning, and decision-making.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion tile">
                            <details class="accordion__details" name="faq">
                                <summary class="accordion__summary">
                                    <h4 class="accordion__title h6">
                                        <span role="term" aria-details="faq-4">Can I download episodes to
                                            listen offline?</span>
                                    </h4>
                                </summary>
                            </details>
                            <div class="accordion__content" id="faq-4" role="definition">
                                <div class="accordion__content-inner">
                                    <div class="accordion__content-body">
                                        <p>AI stands for Artificial Intelligence, which refers to the simulation of
                                            human intelligence in machines. It enables them to perform tasks like
                                            problem-solving, learning, and decision-making.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion tile">
                            <details class="accordion__details" name="faq">
                                <summary class="accordion__summary">
                                    <h4 class="accordion__title h6">
                                        <span role="term" aria-details="faq-5">How often do you release new
                                            episodes?</span>
                                    </h4>
                                </summary>
                            </details>
                            <div class="accordion__content" id="faq-5" role="definition">
                                <div class="accordion__content-inner">
                                    <div class="accordion__content-body">
                                        <p>AI stands for Artificial Intelligence, which refers to the simulation of
                                            human intelligence in machines. It enables them to perform tasks like
                                            problem-solving, learning, and decision-making.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
