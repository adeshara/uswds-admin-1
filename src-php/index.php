<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - RFPMart + USWDS</title>
    <meta name="description" content="Administrator dashboard providing quick access to site management tools, content workflows, and system functions." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>
    <main>

        <section class="usa-section grid-container">
            <div class="grid-row grid-gap">
                <div class="display-none tablet:display-block tablet:grid-col-3 border-right-2px border-base-lightest">
                    <nav aria-label="Side navigation" class="padding-top-4 position-sticky top-0">
                        <ul class="usa-sidenav">
                            <li class="usa-sidenav__item">
                                <a href="./" class="usa-current">Dashboard</a>
                            </li>
                            <li class="usa-sidenav__item">
                                <a href="procurement-overview.html">Bids</a>
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
                    <div class="margin-bottom-4">
                        <h2 class="font-heading-xl">
                            Dashboard
                        </h2>
                    </div>
                    <div class="grid-row grid-gap-2">

                        <div class="usa-card desktop:grid-col-6">
                            <div class="usa-card__container shadow-1">
                                <div class="usa-card__header">
                                    <h2 class="usa-card__heading display-flex align-items-center">
                                        Action Required
                                        <span class="usa-tag bg-error margin-left-1">3</span>
                                    </h2>
                                </div>

                                <div class="usa-card__body">
                                    <div class="usa-alert usa-alert--error usa-alert--slim margin-bottom-1">
                                        <div class="usa-alert__body">
                                            <p class="usa-alert__text">
                                                <strong>Bid Closing:</strong> RFP #2026-09 closes in 2 hours.
                                                <a href="#" class="usa-link">Review now</a>.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="usa-alert usa-alert--warning usa-alert--slim margin-bottom-1">
                                        <div class="usa-alert__body">
                                            <p class="usa-alert__text">
                                                <strong>Missing Data:</strong> "Mayor's Meetup" needs a venue assigned.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="usa-alert usa-alert--info usa-alert--slim">
                                        <div class="usa-alert__body">
                                            <p class="usa-alert__text">
                                                <strong>Category Request:</strong> 2 new categories pending for "Parks Dept".
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="usa-card desktop:grid-col-6">
                            <div class="usa-card__container shadow-1">
                                <div class="usa-card__header">
                                    <h2 class="usa-card__heading display-flex align-items-center">
                                        Notifications
                                    </h2>
                                </div>
                                <div class="usa-card__body">
                                    <ul class="usa-list--unstyled">
                                        <li class="padding-y-1 border-bottom-1px border-base-lightest display-flex flex-justify">
                                            <span class="padding-right-1">New comment on <strong>"New Park Opening"</strong> blog.</span>
                                            <span class="grid-col-1 text-base font-sans-3xs">12m ago</span>
                                        </li>
                                        <li class="padding-y-1 border-bottom-1px border-base-lightest display-flex flex-justify">
                                            <span class="padding-right-1">System Update: Version 2.4 installed successfully.</span>
                                            <span class="grid-col-1 text-base font-sans-3xs">1h ago</span>
                                        </li>
                                        <li class="padding-y-1 border-bottom-1px border-base-lightest display-flex flex-justify">
                                            <span class="padding-right-1">New Event "Yoga in the Park" added by staff.</span>
                                            <span class="grid-col-1 text-base font-sans-3xs">3h ago</span>
                                        </li>
                                        <li class="padding-y-1 display-flex flex-justify">
                                            <span class="padding-right-1">Database backup completed.</span>
                                            <span class="grid-col-1 text-base font-sans-3xs">04:00 AM</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="usa-card__footer">
                                    <a href="#" class="usa-button usa-button--outline width-full">View All Notifications</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <section class="usa-section grid-container padding-x-0 padding-y-3">
                        <div class="grid-row grid-gap">
                            <div class="usa-accordion usa-accordion--bordered">
                                <h4 class="usa-accordion__heading">
                                    <button
                                        type="button"
                                        class="usa-accordion__button bg-primary-lighter hover:bg-primary-lighter font-body-lg"
                                        aria-expanded="true"
                                        aria-controls="admin-dashboard-bids">
                                        Bids & RFPs
                                    </button>
                                </h4>
                                <div id="admin-dashboard-bids" class="usa-accordion__content">
                                    <div class="grid-row grid-gap">
                                        <ul class="usa-card-group tablet:grid-col-4 text-center">
                                            <li class="usa-card margin-bottom-0">
                                                <div class="usa-card__container border-0">
                                                    <div class="usa-card__header padding-0">
                                                        <h6 class="font-heading-md">
                                                            Active
                                                        </h6>
                                                    </div>

                                                    <div class="usa-card__body">
                                                        <img
                                                            class="maxh-card margin-top-2"
                                                            src="images/graphs/admin-dashboard-bids-active.svg"
                                                            alt="Population trend for last 15 years" />
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="usa-card">
                                                <div class="usa-card__container border-0">
                                                    <div class="usa-card__header padding-0">
                                                        <h6 class="font-heading-md">
                                                            Closing Soon
                                                        </h6>
                                                    </div>

                                                    <div class="usa-card__body">
                                                        <img
                                                            class="maxh-card margin-top-2"
                                                            src="images/graphs/admin-dashboard-bids-closing-soon.svg"
                                                            alt="Population trend for last 15 years" />
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="usa-card tablet:grid-col">
                                            <div class="usa-card__container border-0 text-center">
                                                <div class="usa-card__header padding-0">
                                                    <h6 class="font-heading-md">
                                                        Count of bids by status
                                                    </h6>
                                                </div>

                                                <div class="usa-card__body">
                                                    <img
                                                        class="margin-top-2"
                                                        src="images/graphs/admin-dashboard-bids-breakdown.svg"
                                                        alt="Population trend for last 15 years" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="usa-section grid-container padding-x-0 padding-y-3">
                        <div class="grid-row grid-gap">
                            <div class="usa-accordion usa-accordion--bordered">
                                <h4 class="usa-accordion__heading">
                                    <button
                                        type="button"
                                        class="usa-accordion__button bg-primary-lighter hover:bg-primary-lighter font-body-lg"
                                        aria-expanded="true"
                                        aria-controls="admin-dashboard-events">
                                        Community Events
                                    </button>
                                </h4>
                                <div id="admin-dashboard-events" class="usa-accordion__content">
                                    <div class="grid-row grid-gap">
                                        <ul class="usa-card-group tablet:grid-col-4 text-center">
                                            <li class="usa-card margin-bottom-0">
                                                <div class="usa-card__container border-0">
                                                    <div class="usa-card__header padding-0">
                                                        <h6 class="font-heading-md">
                                                            Upcoming
                                                        </h6>
                                                    </div>

                                                    <div class="usa-card__body">
                                                        <img
                                                            class="maxh-card margin-top-2"
                                                            src="images/graphs/admin-dashboard-events-upcoming.svg"
                                                            alt="Population trend for last 15 years" />
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="usa-card">
                                                <div class="usa-card__container border-0">
                                                    <div class="usa-card__header padding-0">
                                                        <h6 class="font-heading-md">
                                                            This Month
                                                        </h6>
                                                    </div>

                                                    <div class="usa-card__body">
                                                        <img
                                                            class="maxh-card margin-top-2"
                                                            src="images/graphs/admin-dashboard-events-this-month.svg"
                                                            alt="Population trend for last 15 years" />
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="usa-card tablet:grid-col">
                                            <div class="usa-card__container border-0 text-center">
                                                <div class="usa-card__header padding-0">
                                                    <h6 class="font-heading-md">
                                                        Events per week (next 6 weeks)
                                                    </h6>
                                                </div>

                                                <div class="usa-card__body">
                                                    <img
                                                        class="margin-top-2"
                                                        src="images/graphs/admin-dashboard-events-6w-trend.svg"
                                                        alt="Population trend for last 15 years" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="usa-section grid-container padding-x-0 padding-y-3">
                        <div class="grid-row grid-gap">
                            <div class="usa-accordion usa-accordion--bordered">
                                <h4 class="usa-accordion__heading">
                                    <button
                                        type="button"
                                        class="usa-accordion__button bg-primary-lighter hover:bg-primary-lighter font-body-lg"
                                        aria-expanded="true"
                                        aria-controls="admin-dashboard-news">
                                        News & Updates
                                    </button>
                                </h4>
                                <div id="admin-dashboard-news" class="usa-accordion__content">
                                    <div class="grid-row grid-gap">
                                        <ul class="usa-card-group tablet:grid-col-4 text-center">
                                            <li class="usa-card margin-bottom-0">
                                                <div class="usa-card__container border-0">
                                                    <div class="usa-card__header padding-0">
                                                        <h6 class="font-heading-md">
                                                            Published
                                                        </h6>
                                                    </div>

                                                    <div class="usa-card__body">
                                                        <img
                                                            class="maxh-card margin-top-2"
                                                            src="images/graphs/admin-dashboard-news-publish.svg"
                                                            alt="Population trend for last 15 years" />
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="usa-card">
                                                <div class="usa-card__container border-0">
                                                    <div class="usa-card__header padding-0">
                                                        <h6 class="font-heading-md">
                                                            Drafts
                                                        </h6>
                                                    </div>

                                                    <div class="usa-card__body">
                                                        <img
                                                            class="maxh-card margin-top-2"
                                                            src="images/graphs/admin-dashboard-news-draft.svg"
                                                            alt="Population trend for last 15 years" />
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="usa-card tablet:grid-col">
                                            <div class="usa-card__container border-0 text-center">
                                                <div class="usa-card__header padding-0">
                                                    <h6 class="font-heading-md">
                                                        Articles published per month (last 6 months)
                                                    </h6>
                                                </div>

                                                <div class="usa-card__body">
                                                    <img
                                                        class="margin-top-2"
                                                        src="images/graphs/admin-dashboard-news-publish-6m-trend.svg"
                                                        alt="Population trend for last 15 years" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>

    </main>
    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>