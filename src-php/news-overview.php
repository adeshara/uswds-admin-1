<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>News Overview - RFPMart + USWDS</title>
    <meta name="description" content="Administrative overview of news content with summary statistics and options to manage, edit, and organize articles." />

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
                                <a href="procurement-overview.html">Bids</a>
                            </li>
                            <li class="usa-sidenav__item">
                                <a href="events-overview.html">Events</a>
                            </li>
                            <li class="usa-sidenav__item">
                                <a href="news-overview.html" class="usa-current">News</a>
                                <ul class="usa-sidenav__sublist">
                                    <li class="usa-sidenav__item">
                                        <a href="#">All Articles</a>
                                    </li>
                                    <li class="usa-sidenav__item">
                                        <a href="news-add-new-news.html">Post an Article</a>
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
                    <div class="margin-bottom-6">
                        <h2 class="font-heading-xl">
                            News - A quick overview
                        </h2>
                    </div>
                    <ul class="usa-card-group grid-row grid-gap-1">
                        <li class="usa-card margin-bottom-0 tablet:grid-col text-center">
                            <div class="usa-card__container border-0">
                                <div class="usa-card__header padding-0">
                                    <h4 class="font-heading-lg">
                                        Total
                                    </h4>
                                </div>

                                <div class="usa-card__body">
                                    <img
                                        class="maxh-card margin-top-2"
                                        src="images/graphs/admin-news-total.svg"
                                        alt="Population trend for last 15 years" />
                                </div>
                            </div>
                        </li>
                        <li class="usa-card margin-bottom-0 tablet:grid-col text-center">
                            <div class="usa-card__container border-0">
                                <div class="usa-card__header padding-0">
                                    <h4 class="font-heading-lg">
                                        Published
                                    </h4>
                                </div>

                                <div class="usa-card__body">
                                    <img
                                        class="maxh-card margin-top-2"
                                        src="images/graphs/admin-news-published.svg"
                                        alt="Population trend for last 15 years" />
                                </div>
                            </div>
                        </li>

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
                                        src="images/graphs/admin-news-draft.svg"
                                        alt="Population trend for last 15 years" />
                                </div>
                            </div>
                        </li>

                        <li class="usa-card margin-bottom-0 tablet:grid-col text-center">
                            <div class="usa-card__container border-0">
                                <div class="usa-card__header padding-0">
                                    <h4 class="font-heading-lg">
                                        Departments
                                    </h4>
                                </div>

                                <div class="usa-card__body">
                                    <img
                                        class="maxh-card margin-top-2"
                                        src="images/graphs/admin-news-departments.svg"
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
                                        Articles published per month (last 6 months)
                                    </h4>
                                </div>

                                <div class="usa-card__body">
                                    <img
                                        class="margin-top-2"
                                        src="images/graphs/admin-news-published-6m-trend.svg"
                                        alt="Population trend for last 15 years" />
                                </div>
                            </div>
                        </div>
                        <div class="usa-card tablet:grid-col">
                            <div class="usa-card__container border-0 text-center">
                                <div class="usa-card__header padding-0">
                                    <h4 class="font-heading-lg">
                                        Published Articles by Department
                                    </h4>
                                </div>

                                <div class="usa-card__body">
                                    <img
                                        class="margin-top-2"
                                        src="images/graphs/admin-news-published-department.svg"
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