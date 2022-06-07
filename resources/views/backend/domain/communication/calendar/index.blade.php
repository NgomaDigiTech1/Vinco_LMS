@extends('backend.layout.communication')

@section('title', "Calendar")

@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content"><h3 class="nk-block-title page-title">Calendar</h3></div>
                        <div class="nk-block-head-content"><a class="btn btn-primary" data-bs-toggle="modal"
                                                              href="#addEventPopup"><em
                                    class="icon ni ni-plus"></em><span>Add Event</span></a></div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="card">
                        <div class="card-inner">
                            <div id="calendar"
                                 class="nk-calendar fc fc-media-screen fc-direction-ltr fc-theme-bootstrap"
                                 style="height: 800px;">
                                <div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr">
                                    <div class="fc-toolbar-chunk"><h2 class="fc-toolbar-title" id="fc-dom-1">June
                                            2022</h2>
                                        <div class="btn-group">
                                            <button type="button" title="Previous month" aria-pressed="false"
                                                    class="fc-prev-button btn btn-primary"><span
                                                    class="fa fa-chevron-left"></span></button>
                                            <button type="button" title="Next month" aria-pressed="false"
                                                    class="fc-next-button btn btn-primary"><span
                                                    class="fa fa-chevron-right"></span></button>
                                        </div>
                                    </div>
                                    <div class="fc-toolbar-chunk"></div>
                                    <div class="fc-toolbar-chunk">
                                        <button type="button" title="This month" aria-pressed="false"
                                                class="fc-today-button btn btn-primary" disabled="">today
                                        </button>
                                        <div class="btn-group">
                                            <button type="button" title="month view" aria-pressed="true"
                                                    class="fc-dayGridMonth-button btn btn-primary active">month
                                            </button>
                                            <button type="button" title="week view" aria-pressed="false"
                                                    class="fc-timeGridWeek-button btn btn-primary">week
                                            </button>
                                            <button type="button" title="day view" aria-pressed="false"
                                                    class="fc-timeGridDay-button btn btn-primary">day
                                            </button>
                                            <button type="button" title="list view" aria-pressed="false"
                                                    class="fc-listWeek-button btn btn-primary">list
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div aria-labelledby="fc-dom-1" class="fc-view-harness fc-view-harness-active">
                                    <div class="fc-daygrid fc-dayGridMonth-view fc-view">
                                        <table role="grid" class="fc-scrollgrid table-bordered fc-scrollgrid-liquid">
                                            <thead role="rowgroup">
                                            <tr role="presentation"
                                                class="fc-scrollgrid-section fc-scrollgrid-section-header ">
                                                <th role="presentation">
                                                    <div class="fc-scroller-harness">
                                                        <div class="fc-scroller" style="overflow: hidden;">
                                                            <table role="presentation" class="fc-col-header "
                                                                   style="width: 1295px;">
                                                                <colgroup></colgroup>
                                                                <thead role="presentation">
                                                                <tr role="row">
                                                                    <th role="columnheader"
                                                                        class="fc-col-header-cell fc-day fc-day-sun">
                                                                        <div class="fc-scrollgrid-sync-inner"><a
                                                                                aria-label="Sunday"
                                                                                class="fc-col-header-cell-cushion ">Sun</a>
                                                                        </div>
                                                                    </th>
                                                                    <th role="columnheader"
                                                                        class="fc-col-header-cell fc-day fc-day-mon">
                                                                        <div class="fc-scrollgrid-sync-inner"><a
                                                                                aria-label="Monday"
                                                                                class="fc-col-header-cell-cushion ">Mon</a>
                                                                        </div>
                                                                    </th>
                                                                    <th role="columnheader"
                                                                        class="fc-col-header-cell fc-day fc-day-tue">
                                                                        <div class="fc-scrollgrid-sync-inner"><a
                                                                                aria-label="Tuesday"
                                                                                class="fc-col-header-cell-cushion ">Tue</a>
                                                                        </div>
                                                                    </th>
                                                                    <th role="columnheader"
                                                                        class="fc-col-header-cell fc-day fc-day-wed">
                                                                        <div class="fc-scrollgrid-sync-inner"><a
                                                                                aria-label="Wednesday"
                                                                                class="fc-col-header-cell-cushion ">Wed</a>
                                                                        </div>
                                                                    </th>
                                                                    <th role="columnheader"
                                                                        class="fc-col-header-cell fc-day fc-day-thu">
                                                                        <div class="fc-scrollgrid-sync-inner"><a
                                                                                aria-label="Thursday"
                                                                                class="fc-col-header-cell-cushion ">Thu</a>
                                                                        </div>
                                                                    </th>
                                                                    <th role="columnheader"
                                                                        class="fc-col-header-cell fc-day fc-day-fri">
                                                                        <div class="fc-scrollgrid-sync-inner"><a
                                                                                aria-label="Friday"
                                                                                class="fc-col-header-cell-cushion ">Fri</a>
                                                                        </div>
                                                                    </th>
                                                                    <th role="columnheader"
                                                                        class="fc-col-header-cell fc-day fc-day-sat">
                                                                        <div class="fc-scrollgrid-sync-inner"><a
                                                                                aria-label="Saturday"
                                                                                class="fc-col-header-cell-cushion ">Sat</a>
                                                                        </div>
                                                                    </th>
                                                                </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody role="rowgroup">
                                            <tr role="presentation"
                                                class="fc-scrollgrid-section fc-scrollgrid-section-body  fc-scrollgrid-section-liquid">
                                                <td role="presentation">
                                                    <div class="fc-scroller-harness fc-scroller-harness-liquid">
                                                        <div class="fc-scroller fc-scroller-liquid-absolute"
                                                             style="overflow: hidden auto;">
                                                            <div class="fc-daygrid-body fc-daygrid-body-unbalanced "
                                                                 style="width: 1295px;">
                                                                <table role="presentation"
                                                                       class="fc-scrollgrid-sync-table"
                                                                       style="width: 1295px; height: 711px;">
                                                                    <colgroup></colgroup>
                                                                    <tbody role="presentation">
                                                                    <tr role="row">
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-sun fc-day-past fc-day-other"
                                                                            data-date="2022-05-29"
                                                                            aria-labelledby="fc-dom-346">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-346"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="May 29, 2022">29</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-mon fc-day-past fc-day-other"
                                                                            data-date="2022-05-30"
                                                                            aria-labelledby="fc-dom-348">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-348"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="May 30, 2022">30</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-tue fc-day-past fc-day-other"
                                                                            data-date="2022-05-31"
                                                                            aria-labelledby="fc-dom-350">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-350"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="May 31, 2022">31</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-wed fc-day-past"
                                                                            data-date="2022-06-01"
                                                                            aria-labelledby="fc-dom-352">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-352"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 1, 2022">1</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-thu fc-day-past"
                                                                            data-date="2022-06-02"
                                                                            aria-labelledby="fc-dom-354">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-354"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 2, 2022">2</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div
                                                                                        class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                        style="top: 0px; left: 0px; right: -185px;">
                                                                                        <a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past fc-event-primary"
                                                                                           tabindex="0"
                                                                                           data-bs-original-title=""
                                                                                           title="">
                                                                                            <div class="fc-event-main">
                                                                                                <div
                                                                                                    class="fc-event-main-frame">
                                                                                                    <div
                                                                                                        class="fc-event-title-container">
                                                                                                        <div
                                                                                                            class="fc-event-title fc-sticky">
                                                                                                            Lorem Ipsum
                                                                                                            passage -
                                                                                                            Product
                                                                                                            Release
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 40px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-fri fc-day-past"
                                                                            data-date="2022-06-03"
                                                                            aria-labelledby="fc-dom-356">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-356"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 3, 2022">3</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div
                                                                                        class="fc-daygrid-event-harness"
                                                                                        style="margin-top: 40px;"><a
                                                                                            class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past fc-event-danger"
                                                                                            tabindex="0">
                                                                                            <div
                                                                                                class="fc-daygrid-event-dot"></div>
                                                                                            <div class="fc-event-time">
                                                                                                1:30p
                                                                                            </div>
                                                                                            <div class="fc-event-title">
                                                                                                Reader will be
                                                                                                distracted
                                                                                            </div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-sat fc-day-past"
                                                                            data-date="2022-06-04"
                                                                            aria-labelledby="fc-dom-358">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-358"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 4, 2022">4</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row">
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-sun fc-day-past"
                                                                            data-date="2022-06-05"
                                                                            aria-labelledby="fc-dom-360">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-360"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 5, 2022">5</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div
                                                                                        class="fc-daygrid-event-harness"
                                                                                        style="margin-top: 0px;"><a
                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-primary"
                                                                                            tabindex="0">
                                                                                            <div class="fc-event-main">
                                                                                                <div
                                                                                                    class="fc-event-main-frame">
                                                                                                    <div
                                                                                                        class="fc-event-title-container">
                                                                                                        <div
                                                                                                            class="fc-event-title fc-sticky">
                                                                                                            The leap
                                                                                                            into
                                                                                                            electronic
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                        </a></div>
                                                                                    <div
                                                                                        class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                        style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                        <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-danger"
                                                                                           tabindex="0">
                                                                                            <div
                                                                                                class="fc-daygrid-event-dot"></div>
                                                                                            <div class="fc-event-time">
                                                                                                5a
                                                                                            </div>
                                                                                            <div class="fc-event-title">
                                                                                                Rujfogve kabwih
                                                                                                haznojuf.
                                                                                            </div>
                                                                                        </a></div>
                                                                                    <div
                                                                                        class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                        style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                        <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-primary-dim"
                                                                                           tabindex="0">
                                                                                            <div
                                                                                                class="fc-daygrid-event-dot"></div>
                                                                                            <div class="fc-event-time">
                                                                                                7a
                                                                                            </div>
                                                                                            <div class="fc-event-title">
                                                                                                simply dummy text of the
                                                                                                printing
                                                                                            </div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"><a
                                                                                            class="fc-daygrid-more-link fc-more-link"
                                                                                            title="Show 2 more events"
                                                                                            aria-expanded="false"
                                                                                            aria-controls=""
                                                                                            tabindex="0">+2 more</a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-mon fc-day-today "
                                                                            data-date="2022-06-06"
                                                                            aria-labelledby="fc-dom-362">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-362"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 6, 2022">6</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div
                                                                                        class="fc-daygrid-event-harness"
                                                                                        style="margin-top: 0px;"><a
                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today fc-event-primary"
                                                                                            tabindex="0">
                                                                                            <div class="fc-event-main">
                                                                                                <div
                                                                                                    class="fc-event-main-frame">
                                                                                                    <div
                                                                                                        class="fc-event-title-container">
                                                                                                        <div
                                                                                                            class="fc-event-title fc-sticky">
                                                                                                            Piece of
                                                                                                            classical
                                                                                                            Latin
                                                                                                            literature
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                        </a></div>
                                                                                    <div
                                                                                        class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                        style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                        <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today fc-event-info"
                                                                                           tabindex="0">
                                                                                            <div
                                                                                                class="fc-daygrid-event-dot"></div>
                                                                                            <div class="fc-event-time">
                                                                                                10a
                                                                                            </div>
                                                                                            <div class="fc-event-title">
                                                                                                Nogok kewwib ezidbi.
                                                                                            </div>
                                                                                        </a></div>
                                                                                    <div
                                                                                        class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                        style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                        <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today fc-event-warning-dim"
                                                                                           tabindex="0">
                                                                                            <div
                                                                                                class="fc-daygrid-event-dot"></div>
                                                                                            <div class="fc-event-time">
                                                                                                2:30p
                                                                                            </div>
                                                                                            <div class="fc-event-title">
                                                                                                Mifebi ik cumean.
                                                                                            </div>
                                                                                        </a></div>
                                                                                    <div
                                                                                        class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                        style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                        <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today fc-event-info"
                                                                                           tabindex="0">
                                                                                            <div
                                                                                                class="fc-daygrid-event-dot"></div>
                                                                                            <div class="fc-event-time">
                                                                                                5:30p
                                                                                            </div>
                                                                                            <div class="fc-event-title">
                                                                                                Play Time
                                                                                            </div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"><a
                                                                                            class="fc-daygrid-more-link fc-more-link"
                                                                                            title="Show 3 more events"
                                                                                            aria-expanded="false"
                                                                                            aria-controls=""
                                                                                            tabindex="0">+3 more</a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-tue fc-day-future"
                                                                            data-date="2022-06-07"
                                                                            aria-labelledby="fc-dom-364">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-364"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 7, 2022">7</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div
                                                                                        class="fc-daygrid-event-harness"
                                                                                        style="margin-top: 0px;"><a
                                                                                            class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-event-danger-dim"
                                                                                            tabindex="0">
                                                                                            <div
                                                                                                class="fc-daygrid-event-dot"></div>
                                                                                            <div class="fc-event-time">
                                                                                                4p
                                                                                            </div>
                                                                                            <div class="fc-event-title">
                                                                                                Jidehse gegoj fupelone.
                                                                                            </div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-wed fc-day-future"
                                                                            data-date="2022-06-08"
                                                                            aria-labelledby="fc-dom-366">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-366"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 8, 2022">8</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-thu fc-day-future"
                                                                            data-date="2022-06-09"
                                                                            aria-labelledby="fc-dom-368">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-368"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 9, 2022">9</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-fri fc-day-future"
                                                                            data-date="2022-06-10"
                                                                            aria-labelledby="fc-dom-370">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-370"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 10, 2022">10</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-sat fc-day-future"
                                                                            data-date="2022-06-11"
                                                                            aria-labelledby="fc-dom-372">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-372"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 11, 2022">11</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row">
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-sun fc-day-future"
                                                                            data-date="2022-06-12"
                                                                            aria-labelledby="fc-dom-374">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-374"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 12, 2022">12</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div
                                                                                        class="fc-daygrid-event-harness"
                                                                                        style="margin-top: 0px;"><a
                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-event-pink-dim"
                                                                                            tabindex="0">
                                                                                            <div class="fc-event-main">
                                                                                                <div
                                                                                                    class="fc-event-main-frame">
                                                                                                    <div
                                                                                                        class="fc-event-title-container">
                                                                                                        <div
                                                                                                            class="fc-event-title fc-sticky">
                                                                                                            Gibmuza viib
                                                                                                            hepobe.
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-mon fc-day-future"
                                                                            data-date="2022-06-13"
                                                                            aria-labelledby="fc-dom-376">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-376"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 13, 2022">13</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-tue fc-day-future"
                                                                            data-date="2022-06-14"
                                                                            aria-labelledby="fc-dom-378">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-378"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 14, 2022">14</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div
                                                                                        class="fc-daygrid-event-harness"
                                                                                        style="margin-top: 0px;"><a
                                                                                            class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-event-success"
                                                                                            tabindex="0">
                                                                                            <div
                                                                                                class="fc-daygrid-event-dot"></div>
                                                                                            <div class="fc-event-time">
                                                                                                1:30p
                                                                                            </div>
                                                                                            <div class="fc-event-title">
                                                                                                Rabfov va hezow.
                                                                                            </div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-wed fc-day-future"
                                                                            data-date="2022-06-15"
                                                                            aria-labelledby="fc-dom-380">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-380"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 15, 2022">15</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-thu fc-day-future"
                                                                            data-date="2022-06-16"
                                                                            aria-labelledby="fc-dom-382">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-382"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 16, 2022">16</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div
                                                                                        class="fc-daygrid-event-harness"
                                                                                        style="margin-top: 0px;"><a
                                                                                            class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-event-info-dim"
                                                                                            tabindex="0"
                                                                                            data-bs-original-title=""
                                                                                            title="">
                                                                                            <div
                                                                                                class="fc-daygrid-event-dot"></div>
                                                                                            <div class="fc-event-time">
                                                                                                4p
                                                                                            </div>
                                                                                            <div class="fc-event-title">
                                                                                                Ke uzipiz zip.
                                                                                            </div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-fri fc-day-future"
                                                                            data-date="2022-06-17"
                                                                            aria-labelledby="fc-dom-384">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-384"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 17, 2022">17</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-sat fc-day-future"
                                                                            data-date="2022-06-18"
                                                                            aria-labelledby="fc-dom-386">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-386"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 18, 2022">18</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row">
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-sun fc-day-future"
                                                                            data-date="2022-06-19"
                                                                            aria-labelledby="fc-dom-388">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-388"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 19, 2022">19</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-mon fc-day-future"
                                                                            data-date="2022-06-20"
                                                                            aria-labelledby="fc-dom-390">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-390"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 20, 2022">20</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-tue fc-day-future"
                                                                            data-date="2022-06-21"
                                                                            aria-labelledby="fc-dom-392">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-392"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 21, 2022">21</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-wed fc-day-future"
                                                                            data-date="2022-06-22"
                                                                            aria-labelledby="fc-dom-394">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-394"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 22, 2022">22</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-thu fc-day-future"
                                                                            data-date="2022-06-23"
                                                                            aria-labelledby="fc-dom-396">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-396"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 23, 2022">23</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-fri fc-day-future"
                                                                            data-date="2022-06-24"
                                                                            aria-labelledby="fc-dom-398">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-398"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 24, 2022">24</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-sat fc-day-future"
                                                                            data-date="2022-06-25"
                                                                            aria-labelledby="fc-dom-400">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-400"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 25, 2022">25</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row">
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-sun fc-day-future"
                                                                            data-date="2022-06-26"
                                                                            aria-labelledby="fc-dom-262">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-262"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 26, 2022">26</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-mon fc-day-future"
                                                                            data-date="2022-06-27"
                                                                            aria-labelledby="fc-dom-264">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-264"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 27, 2022">27</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-tue fc-day-future"
                                                                            data-date="2022-06-28"
                                                                            aria-labelledby="fc-dom-266">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-266"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 28, 2022">28</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-wed fc-day-future"
                                                                            data-date="2022-06-29"
                                                                            aria-labelledby="fc-dom-268">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-268"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 29, 2022">29</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-thu fc-day-future"
                                                                            data-date="2022-06-30"
                                                                            aria-labelledby="fc-dom-270">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-270"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="June 30, 2022">30</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-fri fc-day-future fc-day-other"
                                                                            data-date="2022-07-01"
                                                                            aria-labelledby="fc-dom-272">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-272"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="July 1, 2022">1</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-sat fc-day-future fc-day-other"
                                                                            data-date="2022-07-02"
                                                                            aria-labelledby="fc-dom-274">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-274"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="July 2, 2022">2</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row">
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-sun fc-day-future fc-day-other"
                                                                            data-date="2022-07-03"
                                                                            aria-labelledby="fc-dom-276">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-276"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="July 3, 2022">3</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-mon fc-day-future fc-day-other"
                                                                            data-date="2022-07-04"
                                                                            aria-labelledby="fc-dom-278">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-278"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="July 4, 2022">4</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-tue fc-day-future fc-day-other"
                                                                            data-date="2022-07-05"
                                                                            aria-labelledby="fc-dom-280">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-280"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="July 5, 2022">5</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-wed fc-day-future fc-day-other"
                                                                            data-date="2022-07-06"
                                                                            aria-labelledby="fc-dom-282">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-282"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="July 6, 2022">6</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-thu fc-day-future fc-day-other"
                                                                            data-date="2022-07-07"
                                                                            aria-labelledby="fc-dom-284">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-284"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="July 7, 2022">7</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-fri fc-day-future fc-day-other"
                                                                            data-date="2022-07-08"
                                                                            aria-labelledby="fc-dom-286">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-286"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="July 8, 2022">8</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td role="gridcell"
                                                                            class="fc-daygrid-day fc-day fc-day-sat fc-day-future fc-day-other"
                                                                            data-date="2022-07-09"
                                                                            aria-labelledby="fc-dom-288">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        id="fc-dom-288"
                                                                                        class="fc-daygrid-day-number"
                                                                                        aria-label="July 9, 2022">9</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                         style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
