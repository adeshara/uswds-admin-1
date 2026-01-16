<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add a New Bid - RFPMart + USWDS</title>
    <meta name="description" content="Admin procurement page for creating and publishing new bids and requests for proposals." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>
    <main>

        <section class="usa-section grid-container">
            <div class="grid-row grid-gap-2">
                <div class="display-none tablet:display-block tablet:grid-col-3 border-right-2px border-base-lightest">
                    <nav aria-label="Side navigation" class="padding-top-4 position-sticky top-0">
                        <ul class="usa-sidenav">
                            <li class="usa-sidenav__item">
                                <a href="./">Dashboard</a>
                            </li>
                            <li class="usa-sidenav__item">
                                <a href="procurement-overview.html" class="usa-current">Bids</a>
                                <ul class="usa-sidenav__sublist">
                                    <li class="usa-sidenav__item">
                                        <a href="#">All Bids</a>
                                    </li>
                                    <li class="usa-sidenav__item">
                                        <a href="procurement-add-new-rfps-bid.html" class="usa-current">Post a Bid</a>
                                    </li>
                                    <li class="usa-sidenav__item">
                                        <a href="#">Update a Bid</a>
                                    </li>
                                    <li class="usa-sidenav__item">
                                        <a href="#">All Contracts</a>
                                    </li>
                                    <li class="usa-sidenav__item">
                                        <a href="#">Post a Contract</a>
                                    </li>
                                    <li class="usa-sidenav__item">
                                        <a href="#">Update Contract</a>
                                    </li>
                                    <li class="usa-sidenav__item">
                                        <a href="#">Manage Categories</a>
                                    </li>
                                    <li class="usa-sidenav__item">
                                        <a href="#">Registered Vendors</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="usa-sidenav__item">
                                <a href="events-overview.html">Events</a>
                            </li>
                            <li class="usa-sidenav__item">
                                <a href="news-overview.html">News</a>
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
                                    <a href="./" class="usa-breadcrumb__link">
                                        <span class="">Home</span>
                                    </a>
                                </li>
                                <li class="usa-breadcrumb__list-item">
                                    <a href="procurement-overview.html" class="usa-breadcrumb__link">
                                        <span class="">Bids</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <h2 class="font-heading-xl margin-y-1">
                            Post a New Bid
                        </h2>
                    </header>

                    <form method="post" action="" class="usa-form usa-form--large usa-section grid-container padding-y-2">
                        <div class="usa-card">
                            <div class="usa-card__container border-primary-lighter margin-x-0">
                                <div class="usa-card__header bg-primary-lighter padding-y-1">
                                    <h4 class="usa-card__heading">
                                        Basic Bid Information
                                    </h4>
                                </div>

                                <div class="usa-card__body">

                                    <fieldset class="usa-fieldset">
                                        <legend class="usa-legend margin-top-0 padding-top-3">Procurement Type</legend>
                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="bid-category-ifb"
                                                    type="radio"
                                                    name="bid_category"
                                                    value="ifb" />
                                                <label class="usa-radio__label" for="bid-category-ifb">
                                                    Invitation for Bid (IFB)
                                                </label>
                                            </div>

                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="bid-category-ifq"
                                                    type="radio"
                                                    name="bid_category"
                                                    value="ifq" />
                                                <label class="usa-radio__label" for="bid-category-ifq">
                                                    Invitation for Quote (IFQ)
                                                </label>
                                            </div>

                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="bid-category-rfi"
                                                    type="radio"
                                                    name="bid_category"
                                                    value="rfi" />
                                                <label class="usa-radio__label" for="bid-category-rfi">
                                                    Request for Information (RFI)
                                                </label>
                                            </div>

                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="bid-category-rfp"
                                                    type="radio"
                                                    name="bid_category"
                                                    value="rfp" />
                                                <label class="usa-radio__label" for="bid-category-rfp">
                                                    Request for Proposal (RFP)
                                                </label>
                                            </div>

                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="bid-category-rfq"
                                                    type="radio"
                                                    name="bid_category"
                                                    value="rfq" />
                                                <label class="usa-radio__label" for="bid-category-rfq">
                                                    Request for Quote (RFQ)
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="usa-fieldset">

                                        <div class="grid-row grid-gap">
                                            <div class="usa-form-group tablet:grid-col-3">
                                                <label class="usa-label" for="bid-number">
                                                    Bid #
                                                </label>
                                                <input
                                                    class="usa-input"
                                                    id="bid-number"
                                                    name="bid_number"
                                                    type="text"
                                                    required>
                                            </div>

                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" for="bid-title">
                                                    Title
                                                </label>
                                                <input
                                                    class="usa-input"
                                                    id="bid-title"
                                                    name="bid_title"
                                                    type="text"
                                                    required>
                                            </div>
                                        </div>

                                        <label class="usa-label" for="bid-summary">
                                            Brief Description
                                        </label>
                                        <textarea
                                            class="usa-textarea height-10"
                                            id="bid-summary"
                                            name="bid-summary"
                                            rows="3"
                                            required></textarea>
                                    </fieldset>

                                    <fieldset class="usa-fieldset">
                                        <div class="grid-row grid-gap flex-row">

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
                                                    <option>Parks & Recreation</option>
                                                    <option>Mayor’s Office</option>
                                                    <option>Sanitation Office</option>
                                                </select>
                                            </div>

                                            <div class="tablet:grid-col-4">
                                                <label class="usa-label" for="bid-status">
                                                    Bid Status
                                                </label>
                                                <select class="usa-select" id="bid-status" name="bid-status" required>
                                                    <option value="">Select</option>
                                                    <option value="Draft">Draft</option>
                                                    <option value="Open">Open</option>
                                                    <option value="Closing Soon">Closing Soon</option>
                                                    <option value="Closed">Closed</option>
                                                    <option value="Cancelled">Cancelled</option>
                                                </select>
                                            </div>

                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <div class="usa-card">
                            <div class="usa-card__container border-primary-lighter margin-x-0">
                                <div class="usa-card__header bg-primary-lighter padding-y-1">
                                    <h4 class="usa-card__heading">
                                        Timeline & Key Dates
                                    </h4>
                                </div>

                                <div class="usa-card__body">
                                    <fieldset class="usa-fieldset">
                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" id="bid-publish-date-label" for="bid-publish-date">
                                                    Publish date
                                                </label>
                                                <div class="usa-date-picker">
                                                    <input
                                                        class="usa-input"
                                                        id="bid-publish-date"
                                                        name="bid_publish_date"
                                                        aria-labelledby="bid-publish-date-label"
                                                        required />
                                                </div>
                                            </div>
                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" id="bid-publish-time-label" for="bid-publish-time">
                                                    Publish time
                                                </label>
                                                <div class="usa-time-picker width-full">
                                                    <input
                                                        class="usa-input"
                                                        id="bid-publish-time"
                                                        name="bid_publish_time"
                                                        aria-labelledby="bid-publish-time-label" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" id="bid-due-date-label" for="bid-due-date">
                                                    Due date
                                                </label>
                                                <div class="usa-date-picker">
                                                    <input
                                                        class="usa-input"
                                                        id="bid-due-date"
                                                        name="bid_due_date"
                                                        aria-labelledby="bid-due-date-label"
                                                        required />
                                                </div>
                                            </div>
                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" id="bid-due-time-label" for="bid-due-time">
                                                    Due time
                                                </label>
                                                <div class="usa-time-picker width-full">
                                                    <input
                                                        class="usa-input"
                                                        id="bid-due-time"
                                                        name="bid_due_time"
                                                        aria-labelledby="bid-due-time-label" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" id="bid-questions-deadline-label" for="bid-questions-deadline">
                                                    Questions Deadline
                                                </label>
                                                <div class="usa-date-picker">
                                                    <input
                                                        class="usa-input"
                                                        id="bid-questions-deadline"
                                                        name="bid_questions_deadline"
                                                        aria-labelledby="bid-questions-deadline-label"
                                                        required />
                                                </div>
                                            </div>

                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" id="bid-award-date-label" for="bid-award-date">
                                                    Anticipated Award Date
                                                </label>
                                                <div class="usa-date-picker">
                                                    <input
                                                        class="usa-input"
                                                        id="bid-award-date"
                                                        name="bid_award_date"
                                                        aria-labelledby="bid-award-date-label"
                                                        required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" id="bid-contract-start-date-label" for="bid-contract-start-date">
                                                    Contract Start date
                                                </label>
                                                <div class="usa-date-picker">
                                                    <input
                                                        class="usa-input"
                                                        id="bid-contract-start-date"
                                                        name="bid_contract_start_date"
                                                        aria-labelledby="bid-contract-start-date-label"
                                                        required />
                                                </div>
                                            </div>
                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" id="bid-contract-end-date-label" for="bid-contract-end-date">
                                                    Contract End date
                                                </label>
                                                <div class="usa-date-picker">
                                                    <input
                                                        class="usa-input"
                                                        id="bid-contract-end-date"
                                                        name="bid_contract_end_date"
                                                        aria-labelledby="bid-contract-end-date-label"
                                                        required />
                                                </div>
                                            </div>
                                        </div>

                                        <label class="usa-label" for="bid-time-zone">
                                            Time Zone
                                        </label>
                                        <select class="usa-select" id="bid-time-zone" name="bid-time-zone" required>
                                            <option value="">Select</option>
                                            <option value="cst">Central (CST)</option>
                                            <option value="est">Eastern (EST)</option>
                                            <option value="pst">Pacific (PST)</option>
                                            <option value="mst">Mountain (MST)</option>
                                            <option value="hst">Hawaii (HST)</option>
                                            <option value="akst">Alaska (AKST)</option>
                                        </select>
                                    </fieldset>

                                    <fieldset class="usa-fieldset margin-top-3">
                                        <legend class="usa-legend margin-top-0">Pre-bid Conference</legend>

                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="bid-conference-yes"
                                                    type="radio"
                                                    name="bid_conference"
                                                    value="yes" />
                                                <label class="usa-radio__label" for="bid-conference-yes">
                                                    Yes
                                                </label>
                                            </div>

                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="bid-conference-yes"
                                                    type="radio"
                                                    name="bid_conference"
                                                    value="no"
                                                    checked />
                                                <label class="usa-radio__label" for="bid-conference-yes">
                                                    No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" id="bid-conference-date-label" for="bid-conference-date">
                                                    Pre-bid Conference date
                                                </label>
                                                <div class="usa-date-picker">
                                                    <input
                                                        class="usa-input"
                                                        id="bid-conference-date"
                                                        name="bid_conference_date"
                                                        aria-labelledby="bid-conference-date-label"
                                                        required />
                                                </div>
                                            </div>
                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" id="bid-conference-time-label" for="bid-conference-time">
                                                    Pre-bid Conference time
                                                </label>
                                                <div class="usa-time-picker width-full">
                                                    <input
                                                        class="usa-input"
                                                        id="bid-conference-time"
                                                        name="bid_conference_time"
                                                        aria-labelledby="bid-conference-time-label" />
                                                </div>
                                            </div>
                                        </div>

                                        <label class="usa-label" for="bid-conference-venue-name">
                                            Venue Name
                                        </label>
                                        <input
                                            class="usa-input"
                                            id="bid-conference-venue-name"
                                            name="bid-conference_venue_name"
                                            type="text"
                                            required>

                                        <label class="usa-label" for="bid-conference-address-street">
                                            Street Address
                                        </label>
                                        <input
                                            class="usa-input"
                                            id="bid-conference-address-street"
                                            name="bid_conference_address_street"
                                            type="text"
                                            required>

                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" for="bid-conference-address-city">
                                                    City
                                                </label>
                                                <input
                                                    class="usa-input"
                                                    id="bid-conference-address-city"
                                                    name="bid_conference_address_city"
                                                    type="text"
                                                    required>
                                            </div>

                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" for="bid-conference-address-state">
                                                    State
                                                </label>
                                                <input
                                                    class="usa-input"
                                                    id="bid-conference-address-state"
                                                    name="bid_conference_address_state"
                                                    type="text"
                                                    required>
                                            </div>

                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" for="bid-conference-address-zip">
                                                    Zip Code
                                                </label>
                                                <input
                                                    class="usa-input"
                                                    id="bid-conference-address-zip"
                                                    name="bid_conference_address_zip"
                                                    type="numeric"
                                                    required>
                                            </div>
                                        </div>

                                        <label class="usa-label" for="bid-conference-virtual-link">
                                            Virtual Link (Optional)
                                        </label>
                                        <input
                                            class="usa-input"
                                            id="bid-conference-virtual-link"
                                            name="bid_conference_virtual_link"
                                            type="url">
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <div class="usa-card">
                            <div class="usa-card__container border-primary-lighter margin-x-0">
                                <div class="usa-card__header bg-primary-lighter padding-y-1">
                                    <h4 class="usa-card__heading">
                                        Contact & Communication
                                    </h4>
                                </div>
                                <div class="usa-card__body">
                                    <fieldset class="usa-fieldset margin-bottom-4">
                                        <label class="usa-label" for="bid-officer-name">
                                            Officer Name
                                        </label>
                                        <input
                                            class="usa-input"
                                            id="bid-officer-name"
                                            name="event_contact_name"
                                            type="text"
                                            required>

                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-form-group tablet:grid-col-5">
                                                <label class="usa-label" for="bid-officer-phone">
                                                    Officer Phone
                                                </label>
                                                <div class="usa-input-group">
                                                    <div class="usa-input-prefix" aria-hidden="true">
                                                        <svg aria-hidden="true" role="img" focusable="false" class="usa-icon">
                                                            <use href="uswds/dist/img/sprite.svg#phone"></use>
                                                        </svg>
                                                    </div>
                                                    <input
                                                        id="bid-officer-phone"
                                                        class="usa-input"
                                                        type="tel"
                                                        required />
                                                </div>
                                            </div>

                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" for="bid-officer-email">
                                                    Officer Email
                                                </label>
                                                <div class="usa-input-group">
                                                    <div class="usa-input-prefix" aria-hidden="true">
                                                        <svg aria-hidden="true" role="img" focusable="false" class="usa-icon">
                                                            <use href="uswds/dist/img/sprite.svg#mail_outline"></use>
                                                        </svg>
                                                    </div>
                                                    <input
                                                        id="bid-officer-email"
                                                        class="usa-input"
                                                        type="email"
                                                        required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="usa-form-group tablet:grid-col">
                                            <label class="usa-label" for="bid-officer-office-hours">
                                                Office Hours
                                            </label>
                                            <div class="usa-input-group maxw-full">
                                                <div class="usa-input-prefix" aria-hidden="true">
                                                    <svg aria-hidden="true" role="img" focusable="false" class="usa-icon">
                                                        <use href="uswds/dist/img/sprite.svg#schedule"></use>
                                                    </svg>
                                                </div>
                                                <input
                                                    id="bid-officer-office-hours"
                                                    class="usa-input"
                                                    type="text"
                                                    placeholder="Mon - Fri, 8:00 AM to 5:00 PM CST"
                                                    required />
                                            </div>
                                        </div>

                                    </fieldset>
                                </div>

                            </div>
                        </div>

                        <div class="usa-card">
                            <div class="usa-card__container border-primary-lighter margin-x-0">
                                <div class="usa-card__header bg-primary-lighter padding-y-1">
                                    <h4 class="usa-card__heading">
                                        Bid Documents & Attachments
                                    </h4>
                                </div>
                                <div class="usa-card__body">

                                    <fieldset class="usa-fieldset">
                                        <div class="grid-row grid-gap flex-row">

                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" for="bid-description-1">
                                                    1. Attachment Description
                                                </label>
                                                <input
                                                    class="usa-input"
                                                    id="bid-description-1"
                                                    name="bid_description_1"
                                                    type="text">
                                            </div>
                                            <div class="usa-form-group">
                                                <label class="usa-label" for="event-attachment-1">
                                                    Upload an Attachment (Optional)
                                                </label>
                                                <input
                                                    class="usa-file-input"
                                                    id="event-attachment-1"
                                                    name="event_attachment_1"
                                                    type="file"
                                                    accept=".pdf, .doc, .docx, .xlsx, .csv" />
                                            </div>
                                        </div>

                                        <button type="button" class="usa-button usa-button--outline margin-bottom-3 width-full">
                                            + Add a file
                                        </button>
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