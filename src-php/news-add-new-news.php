<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="View up-to-date data on population, economy, demographics, and other key city metrics." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_admin_nav.php'; ?>
    <main>

        <section class="usa-section grid-container">
            <div class="grid-row grid-gap-2">
                <div class="display-none tablet:display-block tablet:grid-col-3 border-right-2px border-base-lightest">
                    <nav aria-label="Side navigation" class="padding-top-4 position-sticky top-0">
                        <ul class="usa-sidenav">
                            <li class="usa-sidenav__item">
                                <a href="index.html">Dashboard</a>
                            </li>
                            <li class="usa-sidenav__item">
                                <a href="procurement-view-bids-rfps.html">Bids</a>
                            </li>
                            <li class="usa-sidenav__item">
                                <a href="events-view-list.html">Events</a>
                            </li>
                            <li class="usa-sidenav__item">
                                <a href="news-view-list.html" class="usa-current">News</a>
                                <ul class="usa-sidenav__sublist">
                                    <li class="usa-sidenav__item">
                                        <a href="#">All Articles</a>
                                    </li>
                                    <li class="usa-sidenav__item">
                                        <a href="news-add-new-news.html" class="usa-current">Post an Article</a>
                                    </li>
                                    <li class="usa-sidenav__item">
                                        <a href="#">Update an Article</a>
                                    </li>
                                    <li class="usa-sidenav__item">
                                        <a href="#">Manage Categories</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="usa-sidenav__item">
                                <a href="#">Manage Users</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="tablet:grid-col-9">

                    <header class="usa-section grid-container padding-y-1">
                        <nav class="usa-breadcrumb bg-transparent" aria-label="Breadcrumbs">
                            <ul class="usa-breadcrumb__list">
                                <li class="usa-breadcrumb__list-item">
                                    <a href="index.html" class="usa-breadcrumb__link">
                                        <span class="">Home</span>
                                    </a>
                                </li>
                                <li class="usa-breadcrumb__list-item">
                                    <a href="news-view-list.html" class="usa-breadcrumb__link">
                                        <span class="">News</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <h2 class="font-heading-xl margin-y-1">
                            Post a New Article
                        </h2>
                    </header>

                    <form method="post" action="" class="usa-form usa-form--large usa-section grid-container padding-y-2">
                        <div class="usa-card">
                            <div class="usa-card__container border-primary-lighter margin-x-0">
                                <div class="usa-card__header bg-primary-lighter padding-y-1">
                                    <h4 class="usa-card__heading">
                                        Basic Article Information
                                    </h4>
                                </div>
                                <div class="usa-card__body">
                                    <fieldset class="usa-fieldset">

                                        <label class="usa-label" for="title">
                                            Title
                                        </label>
                                        <input
                                            class="usa-input"
                                            id="title"
                                            name="title"
                                            type="text"
                                            required>

                                        <label class="usa-label" for="summary">
                                            Short Summary
                                        </label>
                                        <textarea
                                            class="usa-textarea height-10"
                                            id="summary"
                                            name="summary"
                                            rows="3"
                                            required></textarea>
                                    </fieldset>

                                    <fieldset class="usa-fieldset margin-top-3">
                                        <legend class="usa-legend margin-top-0 text-bold">Featured Image</legend>
                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="featured-image-yes"
                                                    type="radio"
                                                    name="featured_image_enabled[1]"
                                                    value="yes" />
                                                <label class="usa-radio__label" for="featured-image-yes">
                                                    Include featured image
                                                </label>
                                            </div>

                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="featured-image-no"
                                                    type="radio"
                                                    name="featured_image_enabled[1]"
                                                    value="no"
                                                    checked />
                                                <label class="usa-radio__label" for="featured-image-no">
                                                    No image
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <div id="featured-image-container">
                                        <div class="usa-form-group">
                                            <label class="usa-label" for="featured-image">
                                                Upload Image
                                            </label>
                                            <input
                                                class="usa-file-input"
                                                id="featured-image"
                                                name="featured_image[1]"
                                                type="file"
                                                accept="image/*" />
                                        </div>

                                        <div class="usa-form-group">
                                            <label class="usa-label" for="featured-alt-text">
                                                Image Description
                                            </label>
                                            <input
                                                class="usa-input"
                                                id="featured-alt-text"
                                                name="featured_image_alt[1]"
                                                type="text" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="usa-card">
                            <div class="usa-card__container border-primary-lighter margin-x-0">
                                <div class="usa-card__header bg-primary-lighter padding-y-1">
                                    <h4 class="usa-card__heading">
                                        Article Content
                                    </h4>
                                </div>
                                <div class="usa-card__body padding-top-4">
                                    <div class="usa-card margin-bottom-4">
                                        <div class="usa-card__container">

                                            <!-- Section Header / Controls -->
                                            <header class="usa-card__header display-flex flex-justify">
                                                <h5 class="usa-card__heading">Section 1</h5>
                                            </header>

                                            <div class="usa-card__body">

                                                <!-- Section Heading -->
                                                <div class="usa-form-group">
                                                    <label class="usa-label" for="section-heading-1">
                                                        Section Heading (optional)
                                                    </label>
                                                    <input
                                                        class="usa-input"
                                                        id="section-heading-1"
                                                        name="section_heading[]"
                                                        type="text" />
                                                </div>

                                                <!-- Paragraph 1 -->
                                                <fieldset class="usa-fieldset margin-top-3">
                                                    <legend class="usa-legend margin-top-0 text-bold">Paragraphs</legend>

                                                    <div class="usa-form-group">
                                                        <label class="usa-label" for="section-1-paragraph-1">
                                                            Paragraph 1
                                                        </label>
                                                        <textarea
                                                            class="usa-textarea"
                                                            id="section-1-paragraph-1"
                                                            name="section_paragraphs[1][]"
                                                            rows="4"
                                                            required></textarea>
                                                    </div>

                                                    <!-- Additional paragraphs will be appended here -->

                                                    <button type="button" class="usa-button usa-button--outline">
                                                        + Add another paragraph
                                                    </button>
                                                </fieldset>

                                                <!-- Include Image Toggle -->
                                                <fieldset class="usa-fieldset margin-top-3">
                                                    <legend class="usa-legend margin-top-0 text-bold">Section Image</legend>
                                                    <div class="grid-row grid-gap flex-row">
                                                        <div class="usa-radio">
                                                            <input
                                                                class="usa-radio__input"
                                                                id="section-1-image-yes"
                                                                type="radio"
                                                                name="section_image_enabled[1]"
                                                                value="yes" />
                                                            <label class="usa-radio__label" for="section-1-image-yes">
                                                                Include image with this section
                                                            </label>
                                                        </div>

                                                        <div class="usa-radio">
                                                            <input
                                                                class="usa-radio__input"
                                                                id="section-1-image-no"
                                                                type="radio"
                                                                name="section_image_enabled[1]"
                                                                value="no"
                                                                checked />
                                                            <label class="usa-radio__label" for="section-1-image-no">
                                                                No image
                                                            </label>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <!-- Image Fields (conditionally shown via JS) -->
                                                <div id="section-1-image-container">

                                                    <div class="usa-form-group">
                                                        <label class="usa-label" for="section-1-image">
                                                            Upload Image
                                                        </label>
                                                        <input
                                                            class="usa-file-input"
                                                            id="section-1-image"
                                                            name="section_image[1]"
                                                            type="file"
                                                            accept="image/*" />
                                                    </div>

                                                    <div class="usa-form-group">
                                                        <label class="usa-label" for="section-1-alt-text">
                                                            Image Description
                                                        </label>
                                                        <input
                                                            class="usa-input"
                                                            id="section-1-alt-text"
                                                            name="section_image_alt[1]"
                                                            type="text" />
                                                    </div>

                                                    <fieldset class="usa-fieldset margin-top-3">
                                                        <legend class="usa-legend margin-top-0">Image Placement</legend>
                                                        <div class="grid-row grid-gap flex-row">
                                                            <div class="usa-radio">
                                                                <input
                                                                    class="usa-radio__input"
                                                                    id="section-1-placement-full"
                                                                    type="radio"
                                                                    name="section_image_placement[1]"
                                                                    value="full"
                                                                    checked />
                                                                <label class="usa-radio__label" for="section-1-placement-full">
                                                                    Full width
                                                                </label>
                                                            </div>

                                                            <div class="usa-radio">
                                                                <input
                                                                    class="usa-radio__input"
                                                                    id="section-1-placement-left"
                                                                    type="radio"
                                                                    name="section_image_placement[1]"
                                                                    value="left" />
                                                                <label class="usa-radio__label" for="section-1-placement-left">
                                                                    Left aligned
                                                                </label>
                                                            </div>

                                                            <div class="usa-radio">
                                                                <input
                                                                    class="usa-radio__input"
                                                                    id="section-1-placement-right"
                                                                    type="radio"
                                                                    name="section_image_placement[1]"
                                                                    value="right" />
                                                                <label class="usa-radio__label" for="section-1-placement-right">
                                                                    Right aligned
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="usa-card__footer">
                                    <button type="button" class="usa-button usa-button--outline margin-bottom-3 width-full">
                                        + Add Section
                                    </button>
                                </div>

                            </div>
                        </div>

                        <div class="usa-card">
                            <div class="usa-card__container border-primary-lighter margin-x-0">
                                <div class="usa-card__header bg-primary-lighter padding-y-1">
                                    <h4 class="usa-card__heading">
                                        Publish & Classification
                                    </h4>
                                </div>
                                <div class="usa-card__body">
                                    <fieldset class="usa-fieldset">
                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" id="publishing-date-label" for="publishing-date">
                                                    Publishing date
                                                </label>
                                                <div class="usa-date-picker">
                                                    <input
                                                        class="usa-input"
                                                        id="publishing-date"
                                                        name="publishing-date"
                                                        aria-labelledby="publishing-date-label"
                                                        required />
                                                </div>
                                            </div>

                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" id="expiration-date-label" for="expiration-date">
                                                    Expiration date (Optional)
                                                </label>
                                                <div class="usa-date-picker">
                                                    <input
                                                        class="usa-input"
                                                        id="expiration-date"
                                                        name="expiration-date"
                                                        aria-labelledby="expiration-date-label" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-row grid-gap flex-row">
                                            <div class="tablet:grid-col">
                                                <label class="usa-label" for="category">
                                                    Category
                                                </label>
                                                <select class="usa-select" id="category" name="category" required>
                                                    <option value="">Select</option>
                                                    <option>News</option>
                                                    <option>Public Notice</option>
                                                    <option>Press Release</option>
                                                </select>
                                            </div>
                                            <div class="tablet:grid-col">
                                                <label class="usa-label" for="department">
                                                    Posting Department
                                                </label>
                                                <select
                                                    class="usa-select"
                                                    id="department"
                                                    name="department"
                                                    required>
                                                    <option value="">Select</option>
                                                    <option>Transportation</option>
                                                    <option>Public Works</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="usa-fieldset margin-top-3">
                                        <legend class="usa-legend margin-top-0">
                                            Target Audience
                                        </legend>
                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-checkbox">
                                                <input
                                                    class="usa-checkbox__input"
                                                    id="check-residents"
                                                    type="checkbox"
                                                    name="article-target-audiences"
                                                    value="residents" />
                                                <label class="usa-checkbox__label" for="check-residents">Residents</label>
                                            </div>
                                            <div class="usa-checkbox">
                                                <input
                                                    class="usa-checkbox__input"
                                                    id="check-businesses"
                                                    type="checkbox"
                                                    name="article-target-audiences"
                                                    value="businesses" />
                                                <label class="usa-checkbox__label" for="check-businesses">Businesses</label>
                                            </div>
                                            <div class="usa-checkbox">
                                                <input
                                                    class="usa-checkbox__input"
                                                    id="check-visitors"
                                                    type="checkbox"
                                                    name="article-target-audiences"
                                                    value="visitors" />
                                                <label class="usa-checkbox__label" for="check-visitors">Visitors</label>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <label class="usa-label" for="article-read-time">
                                        Read Time
                                    </label>
                                    <div class="usa-input-group">
                                        <div class="usa-input-prefix" aria-hidden="true">
                                            <svg aria-hidden="true" role="img" focusable="false" class="usa-icon">
                                                <use href="uswds/dist/img/sprite.svg#schedule"></use>
                                            </svg>
                                        </div>
                                        <input
                                            id="article-read-time"
                                            class="usa-input"
                                            pattern="[0-9]*"
                                            inputmode="numeric" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="usa-card">
                            <div class="usa-card__container border-primary-lighter margin-x-0">
                                <div class="usa-card__header bg-primary-lighter padding-y-1">
                                    <h4 class="usa-card__heading">
                                        Authority & Contact
                                    </h4>
                                </div>
                                <div class="usa-card__body">
                                    <fieldset class="usa-fieldset margin-bottom-4">
                                        <label class="usa-label" for="contact-name">
                                            Name
                                        </label>
                                        <input
                                            class="usa-input"
                                            id="contact-name"
                                            name="contact-name"
                                            type="text"
                                            required>

                                        <label class="usa-label" for="contact-title">
                                            Title
                                        </label>
                                        <input
                                            class="usa-input"
                                            id="contact-title"
                                            name="contact-title"
                                            type="text"
                                            required>

                                        <label class="usa-label" for="contact-email">
                                            Email
                                        </label>
                                        <div class="usa-input-group maxw-full">
                                            <div class="usa-input-prefix" aria-hidden="true">
                                                <svg aria-hidden="true" role="img" focusable="false" class="usa-icon">
                                                    <use href="uswds/dist/img/sprite.svg#mail_outline"></use>
                                                </svg>
                                            </div>
                                            <input
                                                id="contact-email"
                                                class="usa-input"
                                                type="email"
                                                required />
                                        </div>
                                    </fieldset>
                                </div>

                            </div>
                        </div>

                        <div class="usa-card">
                            <div class="usa-card__container border-primary-lighter margin-x-0">
                                <div class="usa-card__header bg-primary-lighter padding-y-1">
                                    <h4 class="usa-card__heading">
                                        Compliance
                                    </h4>
                                </div>
                                <div class="usa-card__body">

                                    <fieldset class="usa-fieldset">
                                        <legend class="usa-legend margin-top-0 padding-top-3">Content Type</legend>
                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="content-type-info"
                                                    type="radio"
                                                    name="content-type"
                                                    value="informational"
                                                    checked />
                                                <label class="usa-radio__label" for="content-type-info">
                                                    Informational
                                                </label>
                                            </div>

                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="content-type-legal-notice"
                                                    type="radio"
                                                    name="content-type"
                                                    value="legal notice" />
                                                <label class="usa-radio__label" for="content-type-legal-notice">
                                                    Legal Notice
                                                </label>
                                            </div>

                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="content-type-policy-update"
                                                    type="radio"
                                                    name="content-type"
                                                    value="policy update" />
                                                <label class="usa-radio__label" for="content-type-policy-update">
                                                    Policy Update
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="usa-fieldset margin-top-3">
                                        <legend class="usa-legend margin-top-0">Compliance</legend>

                                        <div class="usa-checkbox">
                                            <input
                                                class="usa-checkbox__input"
                                                id="legal-review"
                                                type="checkbox"
                                                name="legal_review_required" />
                                            <label class="usa-checkbox__label" for="legal-review">
                                                Legal Review Required
                                            </label>
                                        </div>

                                        <div class="usa-checkbox">
                                            <input
                                                class="usa-checkbox__input"
                                                id="accessibility"
                                                type="checkbox"
                                                name="accessibility_confirmed"
                                                required />
                                            <label class="usa-checkbox__label" for="accessibility">
                                                Accessibility confirmed (WCAG 2.1 AA)
                                            </label>
                                        </div>
                                    </fieldset>

                                </div>
                            </div>
                        </div>

                        <div class="display-flex flex-row flex-wrap">
                            <button
                                type="submit"
                                name="action"
                                value="draft"
                                class="usa-button usa-button--outline tablet:grid-col">
                                Save Draft
                            </button>

                            <button
                                type="submit"
                                name="action"
                                value="review"
                                class="usa-button tablet:grid-col">
                                Submit for Review
                            </button>

                            <button
                                type="submit"
                                name="action"
                                value="publish"
                                class="usa-button tablet:grid-col tablet:margin-right-0">
                                Publish
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>