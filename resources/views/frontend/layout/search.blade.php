<div class="container">
    <div class="row searchFilter">
        <div class="col-sm-12">
            <div class="input-group">
                <input id="table_filter" type="text" class="form-control" aria-label="Text input with segmented button dropdown">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="label-icon">Category</span>
                        <span class="caret">&nbsp;</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <ul class="category_filters">
                            <li>
                                <input class="cat_type category-input" data-label="All" id="all" value="" name="radios" type="radio">
                                <label for="all">All</label>
                            </li>
                            <li>
                                <input type="radio" name="radios" id="Design" value="Design">
                                <label class="category-label" for="Design">Design</label>
                            </li>
                            <li>
                                <input type="radio" name="radios" id="Marketing" value="Marketing">
                                <label class="category-label" for="Marketing">Marketing</label>
                            </li>
                            <li>
                                <input type="radio" name="radios" id="Programming" value="Programming">
                                <label class="category-label" for="Programming">Programming</label>
                            </li>
                            <li>
                                <input type="radio" name="radios" id="Sales" value="Sales">
                                <label class="category-label" for="Sales">Sales</label>
                            </li>
                            <li>
                                <input type="radio" name="radios" id="Support" value="Support">
                                <label class="category-label" for="Support">Support</label>
                            </li>
                        </ul>
                    </div>
                    <button id="searchBtn" type="button" class="btn btn-secondary btn-search">
                        <span class="glyphicon glyphicon-search">&nbsp;</span>
                        <span class="label-icon">Search</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .searchFilter {
        margin-bottom: 20px;    
    }

    .searchFilter .btn {
        display: inline-block;
        font-weight: 400;
        line-height: 1.25;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 1px solid transparent;
        padding: .5rem 1rem;
        font-size: 16px;
        border-radius: .25rem;
        height: 50px;
        min-width: 20px;
    }

    .searchFilter .btn-secondary {
        color: #373a3c;
        background-color: #fff;
        border: 1px solid #ccc;
    }

    .searchFilter .btn-secondary:hover {
        color: #373a3c;
        background-color: #e6e6e6;
        border-color: #adadad;
    }

    .searchFilter .btn-search {
        background-color: #00aced;
        color: #fff;
        border: 1px solid #00aced;
    }

    .searchFilter .btn-search:hover {
        background-color: #b20a11;
        color: #fff;
        border: 1px solid #b20a11;
    }

    .searchFilter .label-icon {
        display: none;  
    }

    .searchFilter .glyphicon {
        margin-right: -15px;
    }

    .searchFilter .dropdown-menu .category_filters {
        min-width: 178px;
        width: 100%;
        margin: 15px 0 0 -25px;
    }

    .searchFilter .dropdown-menu-right {
        right: 170px;
        min-width: 175px;
        top: 90%;
    }

    .searchFilter .dropdown-menu .category_filters li {
        list-style-type: none;
        padding: 2px 10px;
        font-size: 18px;
    }

    .searchFilter .dropdown-menu .category_filters label {
        margin-left: 15px;
    }

    @media (min-width: 1400px) {
        .ct-header .ct-jumbotron .inner {
            max-width: 470px;
            min-height: 230px;
        }  
    }

    @media (max-width: 1400px) {
        .ct-header-slider .item {
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center top;
        }  
    }

    @media (min-width: 769px) and (max-width: 1400px) {
        .ct-header-slider .item {
            height: auto;  
        }
    }

    @media (max-width: 1260px) {
        #dots-container {
            display: none;
        }
    }

    @media (min-width: 992px) {
        .ct-footer2 .ct-newsletter {
            max-width: 100%;
        }

        #dots-container {
            bottom: 100px;
        } 
    }

    @media (min-width: 768px) {
        .ct-searchbar:before {
            height: 92px;
            bottom: -1px;
        }

        .page-scrolled .navbar .navbar-nav li > * {
            min-height: 67px;
            height: 67px;
        }

        .page-scrolled .navbar .navbar-nav {
            height: 100% !important;
        }

        .ct-current-facts h2 {
            margin: 0 auto 0px;
        }

        .contentNews .ct-recent-news {
            flex-direction: inherit;
        }

        .contentFaq .faq_question .col-sm-11 {
            padding-right: 0px;
        }

        .peopleDetail h2 {
            margin-top: -5px;
        }

        .searchFilter .btn {
            min-width: 172px;  
        }

        .searchFilter .label-icon {
            display: inline-block;  
        }

        .searchFilter .glyphicon {
            margin-right: -5px;
        }

        .ct-header .ct-jumbotron {
            top: 0;
            margin-top: 5%;
        }

        .ct-header .ct-jumbotron h1 {
            font-size: 2.5em;
        }

        .ct-news.ct-news--bigger h3 {
            font-size: 41px;
            line-height: 1.4;
        }
    }

    @media (max-width: 768px) {
        .ct-header .ct-jumbotron {
            width: 80%;
            margin: 20px 10px;
            top: 40%;
            width: 95%;
        }

        .ct-header .ct-jumbotron .inner {
            max-width: 100%;
        }

        #dots-container {
            display: none;
        }

        .main-section {
            margin-top: -80px;
        }

        .searchFilter .dropdown-menu-right {
            right: 0px;
        }
    }
</style>