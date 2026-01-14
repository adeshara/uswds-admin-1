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
                                <a href="events-view-list.html" class="usa-current">Events</a>
                                <ul class="usa-sidenav__sublist">
                                    <li class="usa-sidenav__item">
                                        <a href="#">All Events</a>
                                    </li>
                                    <li class="usa-sidenav__item">
                                        <a href="events-add-new-event.html" class="usa-current">Post an Event</a>
                                    </li>
                                    <li class="usa-sidenav__item">
                                        <a href="#">Update an Event</a>
                                    </li>
                                    <li class="usa-sidenav__item">
                                        <a href="#">Manage Categories</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="usa-sidenav__item">
                                <a href="news-view-list.html">News</a>
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
                                    <a href="events-view-list.html" class="usa-breadcrumb__link">
                                        <span class="">Events</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <h2 class="font-heading-xl margin-y-1">
                            Post an Event
                        </h2>
                    </header>

                    <form method="post" action="" class="usa-form usa-form--large usa-section grid-container padding-y-2">
                        <div class="usa-card">
                            <div class="usa-card__container border-primary-lighter margin-x-0">
                                <div class="usa-card__header bg-primary-lighter padding-y-1">
                                    <h4 class="usa-card__heading">
                                        Basic Event Information
                                    </h4>
                                </div>
                                <div class="usa-card__body">
                                    <fieldset class="usa-fieldset">

                                        <label class="usa-label" for="event-title">
                                            Title
                                        </label>
                                        <input
                                            class="usa-input"
                                            id="event-title"
                                            name="event_title"
                                            type="text"
                                            required>

                                        <div class="grid-row grid-gap flex-row">
                                            <div class="tablet:grid-col">
                                                <label class="usa-label" for="category">
                                                    Category
                                                </label>
                                                <select class="usa-select" id="category" name="category" required>
                                                    <option value="">Select</option>
                                                    <option>Parks & Rec</option>
                                                    <option>Public Safety</option>
                                                    <option>Workshop</option>
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
                                                    <option>Parks & Recreation</option>
                                                    <option>Mayor’s Office</option>
                                                    <option>Sanitation Office</option>
                                                </select>
                                            </div>
                                        </div>

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
                                </div>

                            </div>
                        </div>

                        <div class="usa-card">
                            <div class="usa-card__container border-primary-lighter margin-x-0">
                                <div class="usa-card__header bg-primary-lighter padding-y-1">
                                    <h4 class="usa-card__heading">
                                        Events Details
                                    </h4>
                                </div>
                                <div class="usa-card__body">

                                    <fieldset class="usa-fieldset">
                                        <label class="usa-label" for="event-description">
                                            Full Event Description
                                        </label>
                                        <textarea
                                            class="usa-textarea"
                                            id="event-description"
                                            name="event_description"
                                            rows="5"
                                            required>
                                        </textarea>
                                    </fieldset>

                                    <fieldset class="usa-fieldset margin-top-3">
                                        <legend class="usa-legend margin-top-0 text-bold">
                                            Agenda / Program Details
                                        </legend>

                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-form-group tablet:grid-col-4">
                                                <label class="usa-label" id="event-agenda-item-start-time-label" for="event-agenda-item-start-time-1">
                                                    1. Start time
                                                </label>
                                                <div class="usa-time-picker width-full">
                                                    <input
                                                        class="usa-input"
                                                        id="event-agenda-item-start-time-1"
                                                        name="event_agenda_item_start_time-1"
                                                        aria-labelledby="event-start-time-label" />
                                                </div>
                                            </div>
                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" for="event-agenda-item-description-1">
                                                    Agenda Item Description
                                                </label>
                                                <input
                                                    class="usa-input"
                                                    id="event-agenda-item-description-1"
                                                    name="event-agenda-item-description-1"
                                                    type="text"
                                                    required>
                                            </div>
                                        </div>

                                        <button type="button" class="usa-button usa-button--outline margin-bottom-3 width-full">
                                            + Add an Agenda Item
                                        </button>

                                        <div class="usa-form-group">
                                            <label class="usa-label" for="event-agenda-pdf">
                                                Upload Agenda (Optional)
                                            </label>
                                            <input
                                                class="usa-file-input"
                                                id="event-agenda-pdf"
                                                name="event_agenda_pdf"
                                                type="file"
                                                accept="application/pdf, .pdf" />
                                        </div>

                                    </fieldset>

                                </div>
                            </div>
                        </div>

                        <div class="usa-card">
                            <div class="usa-card__container border-primary-lighter margin-x-0">
                                <div class="usa-card__header bg-primary-lighter padding-y-1">
                                    <h4 class="usa-card__heading">
                                        Date & Time
                                    </h4>
                                </div>
                                <div class="usa-card__body">
                                    <fieldset class="usa-fieldset">

                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" id="event-start-date-label" for="event-start-date">
                                                    Start date
                                                </label>
                                                <div class="usa-date-picker">
                                                    <input
                                                        class="usa-input"
                                                        id="event-start-date"
                                                        name="event_start_date"
                                                        aria-labelledby="event-start-date-label"
                                                        required />
                                                </div>
                                            </div>

                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" id="event-end-date-label" for="event-end-date">
                                                    End date (Optional)
                                                </label>
                                                <div class="usa-date-picker">
                                                    <input
                                                        class="usa-input"
                                                        id="event-end-date"
                                                        name="event_end_date"
                                                        aria-labelledby="event-end-date-label" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" id="event-start-time-label" for="event-start-time">
                                                    Start time
                                                </label>
                                                <div class="usa-time-picker width-full">
                                                    <input
                                                        class="usa-input"
                                                        id="event-start-time"
                                                        name="event_start_time"
                                                        aria-labelledby="event-start-time-label"
                                                        required />
                                                </div>
                                            </div>

                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" id="event-end-time-label" for="event-end-time">
                                                    End time
                                                </label>
                                                <div class="usa-time-picker width-full">
                                                    <input
                                                        class="usa-input"
                                                        id="event-end-time"
                                                        name="event_end_time"
                                                        aria-labelledby="event-end-time-label"
                                                        required />
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="usa-fieldset margin-top-3">

                                        <legend class="usa-legend margin-top-0">Recurrence</legend>
                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="event-recurrence-none"
                                                    type="radio"
                                                    name="event_recurrence"
                                                    value="none"
                                                    checked />
                                                <label class="usa-radio__label" for="event-recurrence-none">
                                                    None
                                                </label>
                                            </div>

                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="event-recurrence-daily"
                                                    type="radio"
                                                    name="event_recurrence"
                                                    value="daily" />
                                                <label class="usa-radio__label" for="event-recurrence-daily">
                                                    Daily
                                                </label>
                                            </div>

                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="event-recurrence-weekly"
                                                    type="radio"
                                                    name="event_recurrence"
                                                    value="weekly" />
                                                <label class="usa-radio__label" for="event-recurrence-weekly">
                                                    Weekly
                                                </label>
                                            </div>

                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="event-recurrence-monthly"
                                                    type="radio"
                                                    name="event_recurrence"
                                                    value="monthly" />
                                                <label class="usa-radio__label" for="event-recurrence-monthly">
                                                    Monthly
                                                </label>
                                            </div>
                                        </div>

                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" id="event-recurrence-start-date-label" for="event-recurrence-start-date">
                                                    Recurrence Start date (Optional)
                                                </label>
                                                <div class="usa-date-picker">
                                                    <input
                                                        class="usa-input"
                                                        id="event-recurrence-start-date"
                                                        name="event_recurrence_start_date"
                                                        aria-labelledby="event-recurrence-start-date-label"
                                                        required />
                                                </div>
                                            </div>

                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" id="event-recurrence-end-date-label" for="event-recurrence-end-date">
                                                    Recurrence End date (Optional)
                                                </label>
                                                <div class="usa-date-picker">
                                                    <input
                                                        class="usa-input"
                                                        id="event-recurrence-end-date"
                                                        name="event_recurrence_end_date"
                                                        aria-labelledby="event-recurrence-end-date-label" />
                                                </div>
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
                                        Location & Access
                                    </h4>
                                </div>
                                <div class="usa-card__body">

                                    <fieldset class="usa-fieldset">
                                        <legend class="usa-legend margin-top-0 padding-top-3">Event Format</legend>
                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="event-format-in-person"
                                                    type="radio"
                                                    name="event_format"
                                                    value="in-person"
                                                    checked />
                                                <label class="usa-radio__label" for="event-format-in-person">
                                                    In-Person
                                                </label>
                                            </div>

                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="event-format-virtual"
                                                    type="radio"
                                                    name="event_format"
                                                    value="virtual" />
                                                <label class="usa-radio__label" for="event-format-virtual">
                                                    Virtual
                                                </label>
                                            </div>

                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="event-format-hybrid"
                                                    type="radio"
                                                    name="event_format"
                                                    value="hybrid" />
                                                <label class="usa-radio__label" for="event-format-hybrid">
                                                    Hybrid
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="usa-fieldset margin-top-3">
                                        <legend class="usa-legend margin-top-0 text-bold">
                                            Address Information
                                        </legend>

                                        <label class="usa-label" for="event-venue-name">
                                            Venue Name
                                        </label>
                                        <input
                                            class="usa-input"
                                            id="event-venue-name"
                                            name="event_venue_name"
                                            type="text"
                                            required>

                                        <label class="usa-label" for="event-venue-address-street">
                                            Street Address
                                        </label>
                                        <input
                                            class="usa-input"
                                            id="event-venue-address-street"
                                            name="event_venue_address_street"
                                            type="text"
                                            required>

                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" for="event-venue-address-city">
                                                    City
                                                </label>
                                                <input
                                                    class="usa-input"
                                                    id="event-venue-address-city"
                                                    name="event_venue_address_city"
                                                    type="text"
                                                    required>
                                            </div>

                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" for="event-venue-address-state">
                                                    State
                                                </label>
                                                <input
                                                    class="usa-input"
                                                    id="event-venue-address-state"
                                                    name="event_venue_address_state"
                                                    type="text"
                                                    required>
                                            </div>

                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" for="event-venue-address-zip">
                                                    Zip Code
                                                </label>
                                                <input
                                                    class="usa-input"
                                                    id="event-venue-address-zip"
                                                    name="event_venue_address_zip"
                                                    type="numeric"
                                                    required>
                                            </div>
                                        </div>

                                        <label class="usa-label" for="event-venue-address-map-link">
                                            Map Link (Optional)
                                        </label>
                                        <input
                                            class="usa-input"
                                            id="event-venue-address-street"
                                            name="event_venue_address_street"
                                            type="url">
                                    </fieldset>

                                    <fieldset class="usa-fieldset margin-top-3">
                                        <legend class="usa-legend margin-top-0 text-bold">
                                            Parking and Public Transportation Instructions
                                        </legend>

                                        <div class="usa-form-group tablet:grid-col">
                                            <label class="usa-label" for="event-venue-parking-transport-inst-1">
                                                Instruction 1
                                            </label>
                                            <input
                                                class="usa-input"
                                                id="event-venue-parking-transport-inst-1"
                                                name="event_venue_parking_transport_inst_1"
                                                type="text"
                                                required>
                                        </div>

                                        <button type="button" class="usa-button usa-button--outline margin-bottom-3 width-full">
                                            + Add Instruction
                                        </button>
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <div class="usa-card">
                            <div class="usa-card__container border-primary-lighter margin-x-0">
                                <div class="usa-card__header bg-primary-lighter padding-y-1">
                                    <h4 class="usa-card__heading">
                                        Registration & Attendance
                                    </h4>
                                </div>
                                <div class="usa-card__body">

                                    <fieldset class="usa-fieldset">
                                        <legend class="usa-legend margin-top-0 padding-top-3">Open to Public?</legend>
                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="event-attendance-restriction-yes"
                                                    type="radio"
                                                    name="event_attendance-restriction"
                                                    value="yes"
                                                    checked />
                                                <label class="usa-radio__label" for="event-attendance-restriction-yes">
                                                    Yes
                                                </label>
                                            </div>

                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="event-attendance-restriction-no"
                                                    type="radio"
                                                    name="event_attendance-restriction"
                                                    value="no" />
                                                <label class="usa-radio__label" for="event-attendance-restriction-no">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="usa-fieldset margin-top-3">
                                        <legend class="usa-legend margin-top-0">Registration Required?</legend>
                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="event-registration-yes"
                                                    type="radio"
                                                    name="event_registration"
                                                    value="yes"
                                                    checked />
                                                <label class="usa-radio__label" for="event-registration-yes">
                                                    Yes
                                                </label>
                                            </div>

                                            <div class="usa-radio">
                                                <input
                                                    class="usa-radio__input"
                                                    id="event-registration-yes"
                                                    type="radio"
                                                    name="event_registration"
                                                    value="no" />
                                                <label class="usa-radio__label" for="event-registration-yes">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="usa-fieldset">

                                        <div class="grid-row grid-gap flex-row">

                                            <div class="usa-form-group tablet:grid-col-5">
                                                <label for="event-registration-cost">
                                                    Event Cost (Enter 0 if free)
                                                </label>
                                                <div class="usa-input-group tablet:grid-col">

                                                    <div class="usa-input-prefix" aria-hidden="true">
                                                        <svg aria-hidden="true" role="img" focusable="false" class="usa-icon">
                                                            <use href="uswds/dist/img/sprite.svg#attach_money"></use>
                                                        </svg>
                                                    </div>
                                                    <input
                                                        id="event-registration-cost"
                                                        name="event_registration_cost"
                                                        class="usa-input"
                                                        pattern="[0-9]*"
                                                        type="numeric" />
                                                </div>
                                            </div>

                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" for="event-registration-url">
                                                    Registration URL
                                                </label>
                                                <input
                                                    class="usa-input"
                                                    id="event-registration-url"
                                                    name="event_registration_url"
                                                    type="url"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" id="event-registration-deadline-date-label" for="event-registration-deadline-date">
                                                    Registration Deadline
                                                </label>
                                                <div class="usa-date-picker">
                                                    <input
                                                        class="usa-input"
                                                        id="event-registration-deadline-date"
                                                        name="event_registration_deadline_date"
                                                        aria-labelledby="event-registration-deadline-date-label"
                                                        required />
                                                </div>
                                            </div>

                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" for="event-capacity">
                                                    Maximum Capacity (Optional)
                                                </label>
                                                <input
                                                    class="usa-input"
                                                    id="event-capacity"
                                                    name="event_capacity"
                                                    type="numeric"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="usa-checkbox margin-top-2">
                                            <input
                                                class="usa-checkbox__input"
                                                id="event-registration-waitlist"
                                                type="checkbox"
                                                name="event_registration_waitlist"
                                                value="enabled" />
                                            <label class="usa-checkbox__label" for="event-registration-waitlist">Enable Registration Waitlist</label>
                                        </div>

                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <div class="usa-card">
                            <div class="usa-card__container border-primary-lighter margin-x-0">
                                <div class="usa-card__header bg-primary-lighter padding-y-1">
                                    <h4 class="usa-card__heading">
                                        Accessibility & Accomodations
                                    </h4>
                                </div>
                                <div class="usa-card__body">
                                    <fieldset class="usa-fieldset">
                                        <legend class="usa-legend margin-top-0 padding-top-3">
                                            Available Accessibility & Accomodations
                                        </legend>
                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-checkbox">
                                                <input
                                                    class="usa-checkbox__input"
                                                    id="event-accessibility-wheelchair"
                                                    type="checkbox"
                                                    name="event_accessibility"
                                                    value="wheelchair" />
                                                <label class="usa-checkbox__label" for="event-accessibility-wheelchair">Wheelchair access</label>
                                            </div>

                                            <div class="usa-checkbox">
                                                <input
                                                    class="usa-checkbox__input"
                                                    id="event-accessibility-sign-lang"
                                                    type="checkbox"
                                                    name="event_accessibility"
                                                    value="sign-language" />
                                                <label class="usa-checkbox__label" for="event-accessibility-sign-lang">Sign language interpretation</label>
                                            </div>

                                            <div class="usa-checkbox">
                                                <input
                                                    class="usa-checkbox__input"
                                                    id="event-accessibility-captions"
                                                    type="checkbox"
                                                    name="event_accessibility"
                                                    value="captions" />
                                                <label class="usa-checkbox__label" for="event-accessibility-captions">Live captions</label>
                                            </div>

                                            <div class="usa-checkbox">
                                                <input
                                                    class="usa-checkbox__input"
                                                    id="event-accessibility-assistive-device"
                                                    type="checkbox"
                                                    name="event_accessibility"
                                                    value="assistive-device" />
                                                <label class="usa-checkbox__label" for="event-accessibility-assistive-device">Assistive listening devices</label>
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
                                        Contact Information
                                    </h4>
                                </div>
                                <div class="usa-card__body">
                                    <fieldset class="usa-fieldset margin-bottom-4">
                                        <label class="usa-label" for="event-contact-name">
                                            Contact Name or Office
                                        </label>
                                        <input
                                            class="usa-input"
                                            id="event-contact-name"
                                            name="event_contact_name"
                                            type="text"
                                            required>

                                        <div class="grid-row grid-gap flex-row">
                                            <div class="usa-form-group tablet:grid-col-4">
                                                <label class="usa-label" for="event-contact-phone">
                                                    Phone
                                                </label>
                                                <div class="usa-input-group">
                                                    <div class="usa-input-prefix" aria-hidden="true">
                                                        <svg aria-hidden="true" role="img" focusable="false" class="usa-icon">
                                                            <use href="uswds/dist/img/sprite.svg#phone"></use>
                                                        </svg>
                                                    </div>
                                                    <input
                                                        id="event-contact-phone"
                                                        class="usa-input"
                                                        type="tel"
                                                        required />
                                                </div>
                                            </div>

                                            <div class="usa-form-group tablet:grid-col">
                                                <label class="usa-label" for="event-contact-email">
                                                    Email
                                                </label>
                                                <div class="usa-input-group">
                                                    <div class="usa-input-prefix" aria-hidden="true">
                                                        <svg aria-hidden="true" role="img" focusable="false" class="usa-icon">
                                                            <use href="uswds/dist/img/sprite.svg#mail_outline"></use>
                                                        </svg>
                                                    </div>
                                                    <input
                                                        id="event-contact-email"
                                                        class="usa-input"
                                                        type="email"
                                                        required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="usa-form-group tablet:grid-col">
                                            <label class="usa-label" for="event-contact-office-hours">
                                                Office Hours
                                            </label>
                                            <div class="usa-input-group maxw-full">
                                                <div class="usa-input-prefix" aria-hidden="true">
                                                    <svg aria-hidden="true" role="img" focusable="false" class="usa-icon">
                                                        <use href="uswds/dist/img/sprite.svg#schedule"></use>
                                                    </svg>
                                                </div>
                                                <input
                                                    id="event-contact-office-hours"
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
                                        Media & Attachments
                                    </h4>
                                </div>
                                <div class="usa-card__body">

                                    <fieldset class="usa-fieldset">

                                        <div class="usa-form-group">
                                            <label class="usa-label" for="event-featured-image">
                                                Upload Featured Image (Optional)
                                            </label>
                                            <input
                                                class="usa-file-input"
                                                id="event-featured-image"
                                                name="event_featured_image"
                                                type="file"
                                                accept="image/*" />
                                        </div>

                                    </fieldset>

                                    <fieldset class="usa-fieldset margin-top-3">

                                        <legend class="usa-legend margin-top-0 text-bold">
                                            Attachments
                                        </legend>

                                        <div class="usa-form-group">
                                            <label class="usa-label" for="event-attachment-1">
                                                Upload an Attachment (Optional)
                                            </label>
                                            <input
                                                class="usa-file-input"
                                                id="event-attachment-1"
                                                name="event_attachment_1"
                                                type="file" />
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