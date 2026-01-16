<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bids Overview - RFPMart + USWDS</title>
    <meta name="description" content="Administrative overview of bids and RFPs with key statistics and tools to review, manage, and track procurement activity." />

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
                                <a href="./">Dashboard</a>
                            </li>
                            <li class="usa-sidenav__item">
                                <a href="procurement-overview.html" class="usa-current">Bids</a>
                                <ul class="usa-sidenav__sublist">
                                    <li class="usa-sidenav__item">
                                        <a href="#">All Bids</a>
                                    </li>
                                    <li class="usa-sidenav__item">
                                        <a href="procurement-add-new-rfps-bid.html">Post a Bid</a>
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
                    <div class="margin-bottom-6">
                        <h2 class="font-heading-xl">
                            Events - A quick overview
                        </h2>
                    </div>
                    <ul class="usa-card-group grid-row grid-gap-1">
                        <li class="usa-card margin-bottom-0 tablet:grid-col text-center">
                            <div class="usa-card__container border-0">
                                <div class="usa-card__header padding-0">
                                    <h4 class="font-heading-lg">
                                        Drafts
                                    </h4>
                                </div>

                                <div class="usa-card__body">
                                    <img
                                        class="maxh-card margin-top-2"
                                        src="images/graphs/admin-bids-drafts.svg"
                                        alt="Population trend for last 15 years" />
                                </div>
                            </div>
                        </li>
                        <li class="usa-card margin-bottom-0 tablet:grid-col text-center">
                            <div class="usa-card__container border-0">
                                <div class="usa-card__header padding-0">
                                    <h4 class="font-heading-lg">
                                        Active
                                    </h4>
                                </div>

                                <div class="usa-card__body">
                                    <img
                                        class="maxh-card margin-top-2"
                                        src="images/graphs/admin-bids-active.svg"
                                        alt="Population trend for last 15 years" />
                                </div>
                            </div>
                        </li>

                        <li class="usa-card margin-bottom-0 tablet:grid-col text-center">
                            <div class="usa-card__container border-0">
                                <div class="usa-card__header padding-0">
                                    <h4 class="font-heading-lg">
                                        Closing Soon
                                    </h4>
                                </div>

                                <div class="usa-card__body">
                                    <img
                                        class="maxh-card margin-top-2"
                                        src="images/graphs/admin-bids-closing-soon.svg"
                                        alt="Population trend for last 15 years" />
                                </div>
                            </div>
                        </li>

                        <li class="usa-card margin-bottom-0 tablet:grid-col text-center">
                            <div class="usa-card__container border-0">
                                <div class="usa-card__header padding-0">
                                    <h4 class="font-heading-lg">
                                        Closed
                                    </h4>
                                </div>

                                <div class="usa-card__body">
                                    <img
                                        class="maxh-card margin-top-2"
                                        src="images/graphs/admin-bids-closed.svg"
                                        alt="Population trend for last 15 years" />
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="usa-card-group grid-row grid-gap">
                        <div class="usa-card tablet:grid-col">
                            <div class="usa-card__container border-0 text-center">
                                <div class="usa-card__header padding-0">
                                    <h4 class="font-heading-lg">
                                        Bid Count Distribution by Status
                                    </h4>
                                </div>

                                <div class="usa-card__body">
                                    <img
                                        class="margin-top-2"
                                        src="images/graphs/admin-bids-status-dist.svg"
                                        alt="Population trend for last 15 years" />
                                </div>
                            </div>
                        </div>
                        <div class="usa-card tablet:grid-col">
                            <div class="usa-card__container border-0 text-center">
                                <div class="usa-card__header padding-0">
                                    <h4 class="font-heading-lg">
                                        Bid Status Distribution by Department
                                    </h4>
                                </div>

                                <div class="usa-card__body">
                                    <img
                                        class="margin-top-2"
                                        src="images/graphs/admin-bids-status-dist-departments.svg"
                                        alt="Population trend for last 15 years" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>