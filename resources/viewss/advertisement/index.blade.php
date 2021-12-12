@extends('advertisement.layout.app')
@section('title')
Ads Management
@endsection
@section('content')

<br>

   <div class="dashboard-overview">
      <div class="dashboard-overview-header">
         <div currency-offset="2" class="dashboard-overview-cost dashboard-overview-header-cost" style="width: 37%;">
            <div class="card-item">
               <div class="card-item-detail">
                  <div class="card-item-detail-title"><img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48Y2lyY2xlIGZpbGw9IiNFRkY1RkUiIGN4PSIxMCIgY3k9IjEwIiByPSIxMCIvPjxwYXRoIGQ9Ik0xMy43NDkgNS45Mzl2Ny44NmMwIC4xMzQtLjEzNC4yMjMtLjIyMy4yMjMtLjA0NSAwLS4wOSAwLS4xMzQtLjA0NWEuOS45IDAgMDAtLjU4LS4xNzcuOTU1Ljk1NSAwIDAwLS43Ni4zNTVjLS4wNDQuMDg5LS4xMzMuMDg5LS4xNzguMDg5LS4wOSAwLS4xMzQtLjA0NS0uMTc4LS4wOWEuOTU1Ljk1NSAwIDAwLS43Ni0uMzU0Ljk1NS45NTUgMCAwMC0uNzU4LjM1NWMtLjA0NS4wODktLjEzNC4wODktLjE3OS4wODlhLjM0LjM0IDAgMDEtLjE3OC0uMDkuOTU1Ljk1NSAwIDAwLS43NTktLjM1NC45NTUuOTU1IDAgMDAtLjc1OS4zNTVjLS4wNDQuMDg5LS4xMzQuMDg5LS4xNzguMDg5YS4zNC4zNCAwIDAxLS4xNzktLjA5Ljk1NS45NTUgMCAwMC0uNzU5LS4zNTRjLS4yMjMgMC0uNDAxLjA4OC0uNTguMTc3LS4wNDUuMDQ1LS4wOS4wNDUtLjEzNC4wNDUtLjEzNCAwLS4yMjMtLjA5LS4yMjMtLjIyMlY1LjkzOWMwLS40ODkuNDQ2LS40NDQuNDQ2LS40NDRoNi42MDdjLjQ5IDAgLjQ0Ni40NDQuNDQ2LjQ0NHpNOC4xNDYgNy45OTRhLjM3NS4zNzUgMCAxMDAgLjc1aDMuNzRhLjM3NS4zNzUgMCAwMDAtLjc1aC0zLjc0em0wIDIuNWEuMzc1LjM3NSAwIDEwMCAuNzVoMy43NGEuMzc1LjM3NSAwIDAwMC0uNzVoLTMuNzR6IiBmaWxsPSIjNjI5QkZFIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz48L2c+PC9zdmc+" class="item-title-icon"> <span class="item-title">Today's Spends</span></div>
                  <div class="card-item-detail-info">
                     <div class="card-item-detail-info-item">
                        <div class="item-num"><span class="item-num-today">0.00</span> <span class="item-num-info">
                           USD
                           </span>
                        </div>
                        <div class="item-status">
                           Account Balance
                           <span>
                              0.00
                              USD
                              <div aria-describedby="vi-tooltip-7169" tabindex="0" class="tooltip-question-info vi-tooltip tooltip-large"><i class="vi-icon-question"></i></div>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="costrate" data-highcharts-chart="1">
               <div id="highcharts-kb1tpgj-2" dir="ltr" class="highcharts-container " style="position: relative; overflow: hidden; width: 80px; height: 160px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="80" height="160" viewBox="0 0 80 160" class="highcharts-root" style="font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 12px;">
                     <desc>Created with Highcharts 6.2.0</desc>
                     <defs>
                        <clipPath id="highcharts-kb1tpgj-4">
                           <rect x="0" y="0" width="60" height="135" fill="none"></rect>
                        </clipPath>
                     </defs>
                     <rect fill="#ffffff" x="0" y="0" width="80" height="160" rx="0" ry="0" class="highcharts-background"></rect>
                     <rect fill="none" x="10" y="10" width="60" height="135" class="highcharts-plot-background"></rect>
                     <rect fill="none" data-z-index="1" x="10" y="10" width="60" height="135" class="highcharts-plot-border"></rect>
                     <g data-z-index="3" class="highcharts-series-group">
                        <g data-z-index="0.1" transform="translate(10,10) scale(1 1)" class="highcharts-series highcharts-series-0 highcharts-pie-series highcharts-tracker" style="cursor: pointer;">
                           <path fill="#F7F9FB" d="M 29.993482457481754 35.50000066372439 A 32 32 0 1 1 29.955552641981708 35.50003086825918 M 29.96388652161014 41.50002508046059 A 26 26 0 1 0 29.994704496703925 41.500000539276066 " transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round" class="highcharts-point highcharts-color-0"></path>
                        </g>
                        <g data-z-index="0.1" transform="translate(10,10) scale(1 1)" class="highcharts-markers highcharts-series-0 highcharts-pie-series "></g>
                     </g>
                     <text x="40" text-anchor="middle" data-z-index="4" y="24" class="highcharts-title" style="color: rgb(51, 51, 51); font-size: 18px; fill: rgb(51, 51, 51);"></text>
                     <text x="40" text-anchor="middle" data-z-index="4" y="24" class="highcharts-subtitle" style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);"></text>
                     <g data-z-index="7" class="highcharts-legend">
                        <rect fill="none" rx="0" ry="0" x="0" y="0" width="8" height="8" visibility="hidden" class="highcharts-legend-box"></rect>
                        <g data-z-index="1">
                           <g></g>
                        </g>
                     </g>
                  </svg>
               </div>
            </div>
            <div class="log-entry">
               <a href="https://ads.tiktok.com/i18n/account/payment">
                  <div class="d-flex"><span class="log-entry-text">Payment</span> <i class="vi-icon-ex-arrorright log-entry-icon"></i></div>
               </a>
            </div>
            <div class="vi-loading-mask" style="display: none;">
               <div class="vi-loading-spinner">
                  <svg viewBox="25 25 50 50" class="circular">
                     <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                  </svg>
               </div>
            </div>
         </div>
         <div class="status-card dashboard-overview--header-info-item">
            <div class="status-card-content">
               <div class="status-card-content-title">
                  <div class="title"><img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48Y2lyY2xlIGZpbGw9IiNFNkZBRkIiIGN4PSIxMCIgY3k9IjEwIiByPSIxMCIvPjxwYXRoIGQ9Ik04LjExNyAxNC41MDRhNC44MjEgNC44MjEgMCAwMS0xLjUzNy0xLjAzNyA0LjgyMSA0LjgyMSAwIDAxLTEuNDE3LTMuNDJBNC44MDggNC44MDggMCAwMTYuNTggNi42MjUgNC44MiA0LjgyIDAgMDExMCA1LjIwOWE0LjgwOCA0LjgwOCAwIDAxMy40MjEgMS40MTcgNC44MjIgNC44MjIgMCAwMTEuNDE3IDMuNDIgNC44MDcgNC44MDcgMCAwMS0xLjQxNyAzLjQyMSA0LjgyMSA0LjgyMSAwIDAxLTMuNDIgMS40MTcgNC44MDcgNC44MDcgMCAwMS0xLjg4NC0uMzh6bS41NjgtNC40ODFhLjI1LjI1IDAgMDEuMzQ3LS4wMDdsMS42OTcgMS41NjVhLjE0Ni4xNDYgMCAwMC4yMDgtLjAxMWwyLjE4Mi0yLjQ5YS40MDMuNDAzIDAgMDAtLjYwNi0uNTMybC0xLjU2NyAxLjc4OGEuMjUuMjUgMCAwMS0uMzU3LjAxOUw4LjkyIDguODE3YS4xMjUuMTI1IDAgMDAtLjE3My4wMDNMNi45IDEwLjY2OGEuNDAzLjQwMyAwIDAwLjU3LjU3bDEuMjE1LTEuMjE1eiIgZmlsbD0iIzA2RDZEQiIgZmlsbC1ydWxlPSJub256ZXJvIi8+PC9nPjwvc3ZnPg==" class="item-title-icon"> <span class="item-title">Active</span> <span class="log-entry"><span class="log-entry-text">Log</span> <i class="vi-icon-ex-arrorright log-entry-icon"></i></span></div>
               </div>
               <div class="status-card-empty-content">
                  You currently have no ads. Please create one.
                  <div class="btn-area"><button type="button" class="vi-button vi-byted-button btn-small vi-button--primary vi-button--small"><span><span>Create an Ad</span></span></button></div>
               </div>
            </div>
            <div class="vi-loading-mask" style="display: none;">
               <div class="vi-loading-spinner">
                  <svg viewBox="25 25 50 50" class="circular">
                     <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                  </svg>
               </div>
            </div>
         </div>
         <div class="status-card dashboard-overview--header-info-item">
            <div class="status-card-content">
               <div class="status-card-content-title">
                  <div class="title"><img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48Y2lyY2xlIGZpbGw9IiNGN0YzRkUiIGN4PSIxMCIgY3k9IjEwIiByPSIxMCIvPjxwYXRoIGQ9Ik0xNC4wNSA5LjIzNUg3Ljk0MmEuODMuODMgMCAwMC0uODMzLjgyN3Y0LjAyYzAgLjQ1Ni4zNDcuOTE2LjgwOC45MTZoNi4yNWEuODMuODMgMCAwMC44MzMtLjgyNnYtNC4xMjljMC0uNDU2LS40OS0uODA4LS45NS0uODA4ek04LjQxOCAxMi4zM2EuNTEzLjUxMyAwIDAxLjE5LS43MDRsMi42OTUtMS41NDdhLjUyMS41MjEgMCAwMS43MDkuMTg5LjUxMy41MTMgMCAwMS0uMTkuNzA0bC0yLjY5NSAxLjU0N2EuNTIuNTIgMCAwMS0uNzA5LS4xODl6bTQuOTYtLjMyN2wtMi42OTUgMS41NDdhLjUyLjUyIDAgMDEtLjcwOC0uMTg5LjUxMy41MTMgMCAwMS4xOS0uNzA0bDIuNjk0LTEuNTQ3YS41Mi41MiAwIDAxLjcwOC4xODkuNTEzLjUxMyAwIDAxLS4xOS43MDR6bS0xLjYxLTYuNDg2YTEuMDQgMS4wNCAwIDAwLTEuNDE2LS4zNzdsLTQuOTQgMi44MzZjLS40ODQuMjc1LS43MjcuODY3LS4zOCAxLjQwOEw2LjI1IDExLjI4VjkuMjE3YzAtLjUwOC4zMDctLjgyNi44MzMtLjgyNmg2LjI1bC0xLjU2NC0yLjg3NXoiIGZpbGw9IiNCODg3RjgiIGZpbGwtcnVsZT0ibm9uemVybyIvPjwvZz48L3N2Zz4=" class="item-title-icon"> <span class="item-title">Not Delivering </span></div>
               </div>
               <div class="status-card-content-info">
                  <div class="status-card-content-info-item">
                     <span>
                        <div role="tooltip" id="vi-popover-3006" aria-hidden="true" tabindex="0" class="vi-popover vi-popper vi-popover--plain" style="width: 200px; max-width: none; display: none;">0% Campaign are spending</div>
                        <div aria-describedby="vi-popover-3006" tabindex="0" class="vi-popover__reference">
                           <div class="item-num item-num-hand"><span class="item-num-today item-num-zero">-</span></div>
                           <div class="item-status">Campaign</div>
                        </div>
                     </span>
                  </div>
                  <div class="status-card-content-info-item">
                     <span>
                        <div role="tooltip" id="vi-popover-4594" aria-hidden="true" tabindex="0" class="vi-popover vi-popper vi-popover--plain" style="width: 200px; max-width: none; display: none;">0% Ad Group are spending</div>
                        <div aria-describedby="vi-popover-4594" tabindex="0" class="vi-popover__reference">
                           <div class="item-num item-num-hand"><span class="item-num-today item-num-zero">-</span></div>
                           <div class="item-status">Ad Group</div>
                        </div>
                     </span>
                  </div>
                  <div class="status-card-content-info-item">
                     <span>
                        <div role="tooltip" id="vi-popover-67" aria-hidden="true" tabindex="0" class="vi-popover vi-popper vi-popover--plain" style="width: 200px; max-width: none; display: none;">0% Ad are spending</div>
                        <div aria-describedby="vi-popover-67" tabindex="0" class="vi-popover__reference">
                           <div class="item-num item-num-hand"><span class="item-num-today item-num-zero">-</span></div>
                           <div class="item-status">Ad</div>
                        </div>
                     </span>
                  </div>
               </div>
            </div>
            <div class="vi-loading-mask" style="display: none;">
               <div class="vi-loading-spinner">
                  <svg viewBox="25 25 50 50" class="circular">
                     <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                  </svg>
               </div>
            </div>
         </div>
      </div>
      <div currency-offset="2" class="dashboard-trend dashboard-overview-trend">
         <div data-v-25641bae="" class="dashboard-header">
            <div data-v-25641bae="" class="dashboard-header-name">Trends
            </div>
            <div data-v-25641bae="" class="dashboard-header-select">
               <span data-v-26f33d58="" data-v-25641bae="" class="timezone"><span data-v-26f33d58="">Time Zone:</span>
               UTC-05:00
               <i data-v-cb71c8d8="" data-v-26f33d58="" aria-describedby="vi-tooltip-9888" tabindex="0" class="vi-icon-question vi-tooltip"></i></span> 
               <div data-v-1d8bf8da="" unlink-panels="" placeholder="Choose" value="2021-08-05~2021-08-11" data-v-25641bae="" class="vi-date-editor vi-range-editor vi-input__inner date-range-picker js-range-picker vi-date-editor--daterange vi-range-editor--small" style="width: 240px; height: 34px;">
                  <input placeholder="start date" name="" class="vi-range-input"><span class="vi-range-separator">~</span><input placeholder="end date" name="" class="vi-range-input">
                  <div class="vi-range-editor__suffix"><span data-v-1d8bf8da="" class="date-picker-timezone-hint"></span><i class="vi-input__icon vi-icon-date"></i></div>
               </div>
               <i width="100" data-v-25641bae="" aria-describedby="vi-tooltip-9288" tabindex="0" class="vi-icon-ex-export export-button vi-tooltip" style="height: 20px;"></i>
            </div>
         </div>
         <div class="selected-card item-select">
            <div class="selected-card-container">
               <button type="button" class="btn vi-checkbox-button selected-card-button">
                  <div>
                     <div class="selected-card-button-name">
                        <span>Cost</span> 
                        <span effect="light">
                           <div role="tooltip" id="vi-popover-1030" aria-hidden="true" tabindex="0" class="vi-popover vi-popper vi-question-info-popover vi-popover--plain" style="width: 200px; max-width: none; display: none;">The estimated total amount of money you've spent on your campaign, ad group or ad during its schedule.</div>
                           <i aria-describedby="vi-popover-1030" tabindex="0" class="vi-icon-question-info vi-icon-question vi-popover__reference"></i>
                        </span>
                     </div>
                     <div class="selected-card-button-num">
                        0.00
                     </div>
                     <div class="selected-card-button-info">
                        USD
                     </div>
                  </div>
               </button>
               <div aria-describedby="vi-tooltip-5497" tabindex="0" class="vi-tooltip"></div>
            </div>
            <div class="selected-card-container">
               <button type="button" class="btn vi-checkbox-button selected-card-button">
                  <div>
                     <div class="selected-card-button-name">
                        <span>CPC</span> 
                        <span effect="light">
                           <div role="tooltip" id="vi-popover-9889" aria-hidden="true" tabindex="0" class="vi-popover vi-popper vi-question-info-popover vi-popover--plain" style="width: 200px; max-width: none; display: none;">The average amount of money you've spent on a click.</div>
                           <i aria-describedby="vi-popover-9889" tabindex="0" class="vi-icon-question-info vi-icon-question vi-popover__reference"></i>
                        </span>
                     </div>
                     <div class="selected-card-button-num">
                        0.00
                     </div>
                     <div class="selected-card-button-info">
                        USD
                     </div>
                  </div>
               </button>
               <div aria-describedby="vi-tooltip-6489" tabindex="0" class="vi-tooltip"></div>
            </div>
            <div class="selected-card-container">
               <button type="button" class="btn vi-checkbox-button selected-card-button">
                  <div>
                     <div class="selected-card-button-name">
                        <span>CPA</span> 
                        <span effect="light">
                           <div role="tooltip" id="vi-popover-525" aria-hidden="true" tabindex="0" class="vi-popover vi-popper vi-question-info-popover vi-popover--plain" style="width: 200px; max-width: none; display: none;">The average amount of money you've spent on a conversion.</div>
                           <i aria-describedby="vi-popover-525" tabindex="0" class="vi-icon-question-info vi-icon-question vi-popover__reference"></i>
                        </span>
                     </div>
                     <div class="selected-card-button-num">
                        0.00
                     </div>
                     <div class="selected-card-button-info">
                        USD
                     </div>
                  </div>
               </button>
               <div aria-describedby="vi-tooltip-1467" tabindex="0" class="vi-tooltip"></div>
            </div>
            <div class="selected-card-container">
               <button type="button" class="btn vi-checkbox-button active blue-active selected-card-button">
                  <div>
                     <div class="selected-card-button-name">
                        <span>Impressions</span> 
                        <span effect="light">
                           <div role="tooltip" id="vi-popover-2385" aria-hidden="true" tabindex="0" class="vi-popover vi-popper vi-question-info-popover vi-popover--plain" style="width: 200px; max-width: none; display: none;">The number of times your ads were on screen.</div>
                           <i aria-describedby="vi-popover-2385" tabindex="0" class="vi-icon-question-info vi-icon-question vi-popover__reference"></i>
                        </span>
                     </div>
                     <div class="selected-card-button-num">
                        0
                     </div>
                  </div>
               </button>
               <div aria-describedby="vi-tooltip-8340" tabindex="0" class="vi-tooltip"></div>
            </div>
            <div class="selected-card-container">
               <button type="button" class="btn vi-checkbox-button selected-card-button">
                  <div>
                     <div class="selected-card-button-name">
                        <span>CTR</span> 
                        <span effect="light">
                           <div role="tooltip" id="vi-popover-7489" aria-hidden="true" tabindex="0" class="vi-popover vi-popper vi-question-info-popover vi-popover--plain" style="width: 200px; max-width: none; display: none;">The percentage of times people saw your ad and performed a click.</div>
                           <i aria-describedby="vi-popover-7489" tabindex="0" class="vi-icon-question-info vi-icon-question vi-popover__reference"></i>
                        </span>
                     </div>
                     <div class="selected-card-button-num">
                        0.00%
                     </div>
                  </div>
               </button>
               <div aria-describedby="vi-tooltip-814" tabindex="0" class="vi-tooltip"></div>
            </div>
            <div class="selected-card-container">
               <button type="button" class="btn vi-checkbox-button selected-card-button">
                  <div>
                     <div class="selected-card-button-name">
                        <span>Clicks</span> 
                        <span effect="light">
                           <div role="tooltip" id="vi-popover-8018" aria-hidden="true" tabindex="0" class="vi-popover vi-popper vi-question-info-popover vi-popover--plain" style="width: 200px; max-width: none; display: none;">The number of clicks on your ads.</div>
                           <i aria-describedby="vi-popover-8018" tabindex="0" class="vi-icon-question-info vi-icon-question vi-popover__reference"></i>
                        </span>
                     </div>
                     <div class="selected-card-button-num">
                        0
                     </div>
                  </div>
               </button>
               <div aria-describedby="vi-tooltip-620" tabindex="0" class="vi-tooltip"></div>
            </div>
            <div class="selected-card-container">
               <button type="button" class="btn vi-checkbox-button selected-card-button">
                  <div>
                     <div class="selected-card-button-name">
                        <span>CVR</span> 
                        <span effect="light">
                           <div role="tooltip" id="vi-popover-2284" aria-hidden="true" tabindex="0" class="vi-popover vi-popper vi-question-info-popover vi-popover--plain" style="width: 200px; max-width: none; display: none;">The percentage of results you received out of all the clicks of your ads.</div>
                           <i aria-describedby="vi-popover-2284" tabindex="0" class="vi-icon-question-info vi-icon-question vi-popover__reference"></i>
                        </span>
                     </div>
                     <div class="selected-card-button-num">
                        0.00%
                     </div>
                  </div>
               </button>
               <div aria-describedby="vi-tooltip-1915" tabindex="0" class="vi-tooltip"></div>
            </div>
            <div class="selected-card-container">
               <button type="button" class="btn vi-checkbox-button active green-active selected-card-button">
                  <div>
                     <div class="selected-card-button-name">
                        <span>Conversions</span> 
                        <span effect="light">
                           <div role="tooltip" id="vi-popover-2802" aria-hidden="true" tabindex="0" class="vi-popover vi-popper vi-question-info-popover vi-popover--plain" style="width: 200px; max-width: none; display: none;">The number of times your ad achieved an outcome, based on the objective and settings you selected.</div>
                           <i aria-describedby="vi-popover-2802" tabindex="0" class="vi-icon-question-info vi-icon-question vi-popover__reference"></i>
                        </span>
                     </div>
                     <div class="selected-card-button-num">
                        0
                     </div>
                  </div>
               </button>
               <div aria-describedby="vi-tooltip-453" tabindex="0" class="vi-tooltip"></div>
            </div>
            <div class="selected-card-container">
               <button type="button" class="btn vi-checkbox-button selected-card-button">
                  <div>
                     <div class="selected-card-button-name">
                        <span>CPM</span> 
                        <span effect="light">
                           <div role="tooltip" id="vi-popover-6319" aria-hidden="true" tabindex="0" class="vi-popover vi-popper vi-question-info-popover vi-popover--plain" style="width: 200px; max-width: none; display: none;">The average amount of money you've spent per thousand impressions.</div>
                           <i aria-describedby="vi-popover-6319" tabindex="0" class="vi-icon-question-info vi-icon-question vi-popover__reference"></i>
                        </span>
                     </div>
                     <div class="selected-card-button-num">
                        0.00
                     </div>
                     <div class="selected-card-button-info">
                        USD
                     </div>
                  </div>
               </button>
               <div aria-describedby="vi-tooltip-6194" tabindex="0" class="vi-tooltip"></div>
            </div>
            <div class="vi-loading-mask" style="display: none;">
               <div class="vi-loading-spinner">
                  <svg viewBox="25 25 50 50" class="circular">
                     <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                  </svg>
               </div>
            </div>
         </div>
         <div class="trend-chart-panel">
            <div data-highcharts-chart="0" class="account-chart-panel">
               <div id="highcharts-kb1tpgj-0" dir="ltr" class="highcharts-container " style="position: relative; overflow: hidden; width: 1871px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1871" height="400" viewBox="0 0 1871 400" class="highcharts-root " style="font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 12px;">
                     <desc>Created with Highcharts 6.2.0</desc>
                     <defs>
                        <clipPath id="highcharts-kb1tpgj-1">
                           <rect x="0" y="0" width="1750" height="271" fill="none"></rect>
                        </clipPath>
                     </defs>
                     <rect fill="#ffffff" x="0" y="0" width="1871" height="400" rx="0" ry="0" class="highcharts-background"></rect>
                     <rect fill="none" x="61" y="92" width="1750" height="271" class="highcharts-plot-background"></rect>
                     <rect fill="none" data-z-index="1" x="61" y="92" width="1750" height="271" class="highcharts-plot-border"></rect>
                     <g data-z-index="1" class="highcharts-grid highcharts-xaxis-grid ">
                        <path fill="none" data-z-index="1" d="M 310.5 92 L 310.5 363" opacity="1" class="highcharts-grid-line"></path>
                        <path fill="none" data-z-index="1" d="M 560.5 92 L 560.5 363" opacity="1" class="highcharts-grid-line"></path>
                        <path fill="none" data-z-index="1" d="M 810.5 92 L 810.5 363" opacity="1" class="highcharts-grid-line"></path>
                        <path fill="none" data-z-index="1" d="M 1060.5 92 L 1060.5 363" opacity="1" class="highcharts-grid-line"></path>
                        <path fill="none" data-z-index="1" d="M 1310.5 92 L 1310.5 363" opacity="1" class="highcharts-grid-line"></path>
                        <path fill="none" data-z-index="1" d="M 1560.5 92 L 1560.5 363" opacity="1" class="highcharts-grid-line"></path>
                        <path fill="none" data-z-index="1" d="M 1810.5 92 L 1810.5 363" opacity="1" class="highcharts-grid-line"></path>
                        <path fill="none" data-z-index="1" d="M 60.5 92 L 60.5 363" opacity="1" class="highcharts-grid-line"></path>
                     </g>
                     <g data-z-index="1" class="highcharts-grid highcharts-yaxis-grid ">
                        <path fill="none" stroke="#EDF1F5" stroke-width="1" data-z-index="1" d="M 61 363.5 L 1811 363.5" opacity="1" class="highcharts-grid-line"></path>
                        <path fill="none" stroke="#EDF1F5" stroke-width="1" data-z-index="1" d="M 61 295.5 L 1811 295.5" opacity="1" class="highcharts-grid-line"></path>
                        <path fill="none" stroke="#EDF1F5" stroke-width="1" data-z-index="1" d="M 61 228.5 L 1811 228.5" opacity="1" class="highcharts-grid-line"></path>
                        <path fill="none" stroke="#EDF1F5" stroke-width="1" data-z-index="1" d="M 61 160.5 L 1811 160.5" opacity="1" class="highcharts-grid-line"></path>
                        <path fill="none" stroke="#EDF1F5" stroke-width="1" data-z-index="1" d="M 61 91.5 L 1811 91.5" opacity="1" class="highcharts-grid-line"></path>
                     </g>
                     <g data-z-index="1" class="highcharts-grid highcharts-yaxis-grid ">
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" d="M 61 363.5 L 1811 363.5" opacity="1" class="highcharts-grid-line"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" d="M 61 295.5 L 1811 295.5" opacity="1" class="highcharts-grid-line"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" d="M 61 228.5 L 1811 228.5" opacity="1" class="highcharts-grid-line"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" d="M 61 160.5 L 1811 160.5" opacity="1" class="highcharts-grid-line"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" d="M 61 91.5 L 1811 91.5" opacity="1" class="highcharts-grid-line"></path>
                     </g>
                     <g data-z-index="2" class="highcharts-axis highcharts-xaxis ">
                        <path fill="none" stroke="#EDF1F5" stroke-width="1" data-z-index="7" d="M 61 363.5 L 1811 363.5" class="highcharts-axis-line"></path>
                     </g>
                     <g data-z-index="2" class="highcharts-axis highcharts-yaxis ">
                        <text x="26.5" data-z-index="7" text-anchor="middle" transform="translate(0,0) rotate(270 26.5 227.5)" y="227.5" class="highcharts-axis-title" style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);">
                           <tspan>Conversions</tspan>
                        </text>
                        <path fill="none" data-z-index="7" d="M 61 92 L 61 363" class="highcharts-axis-line"></path>
                     </g>
                     <g data-z-index="2" class="highcharts-axis highcharts-yaxis ">
                        <text x="1845.5" data-z-index="7" text-anchor="middle" transform="translate(0,0) rotate(90 1845.5 227.5)" y="227.5" class="highcharts-axis-title" style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);">
                           <tspan>Impressions</tspan>
                        </text>
                        <path fill="none" data-z-index="7" d="M 1811 92 L 1811 363" class="highcharts-axis-line"></path>
                     </g>
                     <path fill="none" data-z-index="2" stroke="#BDCAE0" stroke-width="1" stroke-dasharray="4,3" visibility="hidden" d="M 685.5 92 L 685.5 363" class="highcharts-crosshair highcharts-crosshair-category undefined" style="pointer-events: none;"></path>
                     <g data-z-index="3" class="highcharts-series-group">
                        <g data-z-index="0.1" transform="translate(61,92) scale(1 1)" clip-path="url(#highcharts-kb1tpgj-1)" class="highcharts-series highcharts-series-0 highcharts-spline-series ">
                           <path fill="none" d="M 125 271 C 125 271 275 271 375 271 C 475 271 525 271 625 271 C 725 271 775 271 875 271 C 975 271 1025 271 1125 271 C 1225 271 1275 271 1375 271 C 1475 271 1625 271 1625 271" data-z-index="1" stroke="#15E6EB" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" class="highcharts-graph"></path>
                           <path fill="none" d="M 115 271 L 125 271 C 125 271 275 271 375 271 C 475 271 525 271 625 271 C 725 271 775 271 875 271 C 975 271 1025 271 1125 271 C 1225 271 1275 271 1375 271 C 1475 271 1625 271 1625 271 L 1635 271" stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22" visibility="visible" data-z-index="2" class="highcharts-tracker-line"></path>
                        </g>
                        <g data-z-index="0.1" transform="translate(61,92) scale(1 1)" class="highcharts-markers highcharts-series-0 highcharts-spline-series highcharts-tracker ">
                           <path fill="#15E6EB" visibility="hidden" d="M 625 271 A 0 0 0 1 1 625 271 Z" data-z-index="-1" fill-opacity="0.25" class="highcharts-halo highcharts-color-undefined"></path>
                           <path fill="#15E6EB" d="M 631 271 A 6 6 0 1 1 630.9999970000002 270.994000001 Z" stroke="#ffffff" stroke-width="1" visibility="hidden"></path>
                        </g>
                        <g data-z-index="0.1" transform="translate(61,92) scale(1 1)" clip-path="url(#highcharts-kb1tpgj-1)" class="highcharts-series highcharts-series-1 highcharts-spline-series ">
                           <path fill="none" d="M 125 271 C 125 271 275 271 375 271 C 475 271 525 271 625 271 C 725 271 775 271 875 271 C 975 271 1025 271 1125 271 C 1225 271 1275 271 1375 271 C 1475 271 1625 271 1625 271" data-z-index="1" stroke="#37517C" stroke-width="2.9999901304280687" stroke-linejoin="round" stroke-linecap="round" class="highcharts-graph"></path>
                           <path fill="none" d="M 115 271 L 125 271 C 125 271 275 271 375 271 C 475 271 525 271 625 271 C 725 271 775 271 875 271 C 975 271 1025 271 1125 271 C 1225 271 1275 271 1375 271 C 1475 271 1625 271 1625 271 L 1635 271" stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22" visibility="visible" data-z-index="2" class="highcharts-tracker-line"></path>
                        </g>
                        <g data-z-index="0.1" transform="translate(61,92) scale(1 1)" class="highcharts-markers highcharts-series-1 highcharts-spline-series highcharts-tracker ">
                           <path fill="#37517C" visibility="hidden" d="M 625 271 A 0 0 0 1 1 625 271 Z" data-z-index="-1" fill-opacity="0.25" class="highcharts-halo highcharts-color-undefined"></path>
                           <path fill="#37517C" d="M 625 265 L 631 271 625 277 619 271 Z" stroke="#ffffff" stroke-width="1" visibility="hidden"></path>
                        </g>
                     </g>
                     <text x="936" text-anchor="middle" data-z-index="4" y="24" class="highcharts-title" style="color: rgb(51, 51, 51); font-size: 18px; fill: rgb(51, 51, 51);"></text>
                     <text x="936" text-anchor="middle" data-z-index="4" y="24" class="highcharts-subtitle" style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);"></text>
                     <g data-z-index="7" transform="translate(820,25)" class="highcharts-legend">
                        <rect fill="none" rx="0" ry="0" x="0" y="0" width="231" height="55" visibility="visible" class="highcharts-legend-box"></rect>
                        <g data-z-index="1">
                           <g>
                              <g data-z-index="1" transform="translate(8,3)" class="highcharts-legend-item highcharts-spline-series highcharts-color-undefined highcharts-series-0">
                                 <path fill="none" d="M 0 11 L 16 11" stroke="#15E6EB" stroke-width="2" class="highcharts-graph"></path>
                                 <text x="21" text-anchor="start" data-z-index="2" y="15" style="color: rgb(70, 77, 98); font-size: 12px; font-weight: normal; cursor: pointer; fill: rgb(70, 77, 98);">
                                    <tspan>Conversions</tspan>
                                 </text>
                              </g>
                              <g data-z-index="1" transform="translate(133.515625,3)" class="highcharts-legend-item highcharts-spline-series highcharts-color-undefined highcharts-series-1">
                                 <path fill="none" d="M 0 11 L 16 11" stroke="#37517C" stroke-width="2" class="highcharts-graph"></path>
                                 <text x="21" y="15" text-anchor="start" data-z-index="2" style="color: rgb(70, 77, 98); font-size: 12px; font-weight: normal; cursor: pointer; fill: rgb(70, 77, 98);">
                                    <tspan>Impressions</tspan>
                                 </text>
                              </g>
                           </g>
                        </g>
                     </g>
                     <g data-z-index="7" class="highcharts-axis-labels highcharts-xaxis-labels ">
                        <text x="186" text-anchor="middle" transform="translate(0,0)" y="382" opacity="1" style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);">2021-07-30</text>
                        <text x="436" text-anchor="middle" transform="translate(0,0)" y="382" opacity="1" style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);">2021-07-31</text>
                        <text x="686" text-anchor="middle" transform="translate(0,0)" y="382" opacity="1" style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);">2021-08-01</text>
                        <text x="936" text-anchor="middle" transform="translate(0,0)" y="382" opacity="1" style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);">2021-08-02</text>
                        <text x="1186" text-anchor="middle" transform="translate(0,0)" y="382" opacity="1" style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);">2021-08-03</text>
                        <text x="1436" text-anchor="middle" transform="translate(0,0)" y="382" opacity="1" style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);">2021-08-04</text>
                        <text x="1686" text-anchor="middle" transform="translate(0,0)" y="382" opacity="1" style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);">2021-08-05</text>
                     </g>
                     <g data-z-index="7" class="highcharts-axis-labels highcharts-yaxis-labels ">
                        <text x="46" text-anchor="end" transform="translate(0,0)" y="367" opacity="1" style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);">0</text>
                        <text x="46" text-anchor="end" transform="translate(0,0)" y="299" opacity="1" style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);">1</text>
                        <text x="46" text-anchor="end" transform="translate(0,0)" y="232" opacity="1" style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);">2</text>
                        <text x="46" text-anchor="end" transform="translate(0,0)" y="164" opacity="1" style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);">3</text>
                        <text x="46" text-anchor="end" transform="translate(0,0)" y="96" opacity="1" style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);">4</text>
                     </g>
                     <g data-z-index="7" class="highcharts-axis-labels highcharts-yaxis-labels ">
                        <text x="1826" text-anchor="start" transform="translate(0,0)" y="367" opacity="1" style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);">0</text>
                        <text x="1826" text-anchor="start" transform="translate(0,0)" y="299" opacity="1" style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);">1</text>
                        <text x="1826" text-anchor="start" transform="translate(0,0)" y="232" opacity="1" style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);">2</text>
                        <text x="1826" text-anchor="start" transform="translate(0,0)" y="164" opacity="1" style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);">3</text>
                        <text x="1826" text-anchor="start" transform="translate(0,0)" y="96" opacity="1" style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);">4</text>
                     </g>
                     <g data-z-index="8" transform="translate(546,276)" opacity="1" visibility="visible" class="highcharts-label highcharts-tooltip highcharts-color-undefined" style="pointer-events: none; white-space: nowrap;">
                        <path fill="none" d="M 8 0 L 116 0 C 124 0 124 0 124 8 L 124 69 C 124 77 124 77 116 77 L 8 77 C 0 77 0 77 0 69 L 0 8 C 0 0 0 0 8 0" stroke="rgba(0,0,0,0.09)" stroke-opacity="0.0225" stroke-width="15" transform="translate(0, 2)" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"></path>
                        <path fill="none" d="M 8 0 L 116 0 C 124 0 124 0 124 8 L 124 69 C 124 77 124 77 116 77 L 8 77 C 0 77 0 77 0 69 L 0 8 C 0 0 0 0 8 0" stroke="rgba(0,0,0,0.09)" stroke-opacity="0.045" stroke-width="13" transform="translate(0, 2)" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"></path>
                        <path fill="none" d="M 8 0 L 116 0 C 124 0 124 0 124 8 L 124 69 C 124 77 124 77 116 77 L 8 77 C 0 77 0 77 0 69 L 0 8 C 0 0 0 0 8 0" stroke="rgba(0,0,0,0.09)" stroke-opacity="0.0675" stroke-width="11" transform="translate(0, 2)" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"></path>
                        <path fill="none" d="M 8 0 L 116 0 C 124 0 124 0 124 8 L 124 69 C 124 77 124 77 116 77 L 8 77 C 0 77 0 77 0 69 L 0 8 C 0 0 0 0 8 0" stroke="rgba(0,0,0,0.09)" stroke-opacity="0.09" stroke-width="9" transform="translate(0, 2)" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"></path>
                        <path fill="none" d="M 8 0 L 116 0 C 124 0 124 0 124 8 L 124 69 C 124 77 124 77 116 77 L 8 77 C 0 77 0 77 0 69 L 0 8 C 0 0 0 0 8 0" stroke="rgba(0,0,0,0.09)" stroke-opacity="0.11249999999999999" stroke-width="7" transform="translate(0, 2)" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"></path>
                        <path fill="none" d="M 8 0 L 116 0 C 124 0 124 0 124 8 L 124 69 C 124 77 124 77 116 77 L 8 77 C 0 77 0 77 0 69 L 0 8 C 0 0 0 0 8 0" stroke="rgba(0,0,0,0.09)" stroke-opacity="0.135" stroke-width="5" transform="translate(0, 2)" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"></path>
                        <path fill="none" d="M 8 0 L 116 0 C 124 0 124 0 124 8 L 124 69 C 124 77 124 77 116 77 L 8 77 C 0 77 0 77 0 69 L 0 8 C 0 0 0 0 8 0" stroke="rgba(0,0,0,0.09)" stroke-opacity="0.1575" stroke-width="3" transform="translate(0, 2)" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"></path>
                        <path fill="none" d="M 8 0 L 116 0 C 124 0 124 0 124 8 L 124 69 C 124 77 124 77 116 77 L 8 77 C 0 77 0 77 0 69 L 0 8 C 0 0 0 0 8 0" stroke="rgba(0,0,0,0.09)" stroke-opacity="0.18" stroke-width="1" transform="translate(0, 2)" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"></path>
                        <path fill="#FFFFFF" d="M 8 0 L 116 0 C 124 0 124 0 124 8 L 124 69 C 124 77 124 77 116 77 L 8 77 C 0 77 0 77 0 69 L 0 8 C 0 0 0 0 8 0" class="highcharts-label-box highcharts-tooltip-box"></path>
                     </g>
                  </svg>
                  <div class="highcharts-label highcharts-tooltip highcharts-color-undefined" style="position: absolute; left: 546px; top: 276px; opacity: 1; pointer-events: none; visibility: visible;">
                     <span data-z-index="1" style="font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 12px; position: absolute; white-space: nowrap; color: rgb(51, 51, 51); cursor: default; margin-left: 0px; margin-top: 0px; left: 8px; top: 8px;">
                        <div style="padding: 6px 14px;">
                           <div style="font-family: STHeitiSC-Medium; font-size: 12px; color: rgb(94, 102, 126); letter-spacing: 0px; margin-bottom: 4px;">
                              2021-08-01 
                           </div>
                           <div style="font-family: PingFangSC-Regular; font-size: 12px; color: rgb(128, 143, 186); letter-spacing: 0px;">
                              <div><span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: rgb(21, 230, 235);"></span>
                                 Conversions
                                 0
                              </div>
                              <div><span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: rgb(55, 81, 124);"></span>
                                 Impressions
                                 0
                              </div>
                           </div>
                        </div>
                     </span>
                  </div>
               </div>
            </div>
            <div class="vi-loading-mask" style="display: none;">
               <div class="vi-loading-spinner">
                  <svg viewBox="25 25 50 50" class="circular">
                     <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                  </svg>
               </div>
            </div>
         </div>
      </div>
      <div class="dashboard-overview-body">
         <div pagination="[object Object]" class="dashboard-campaign dashboard-overview-body-campaign">
            <div data-v-25641bae="" class="dashboard-header">
               <div data-v-25641bae="" class="dashboard-header-name">Campaign
               </div>
               <div data-v-25641bae="" class="dashboard-header-select">
                  <div data-v-25641bae="" class="dashboard-campaign-select">
                     Custom Columns
                  </div>
                  <i width="100" data-v-25641bae="" aria-describedby="vi-tooltip-9228" tabindex="0" class="vi-icon-ex-export  export-button vi-tooltip" style="height: 20px;"></i>
               </div>
            </div>
            <div data-v-678181a9="">
               <div data-v-678181a9="" class="vi-dialog__wrapper" style="display: none;">
                  <div role="dialog" class="vi-dialog" style="margin-top: 15vh;">
                     <div role="dialog_header" class="vi-dialog__header"><span role="dialog_title" class="vi-dialog__title">Custom Columns </span><button type="button" aria-label="Close" class="vi-dialog__headerbtn"><i class="vi-dialog__close vi-icon vi-icon-close"></i></button></div>
                     <div role="dialog_footer" class="vi-dialog__footer"><button data-v-678181a9="" type="button" class="vi-button vi-byted-button vi-button--default"><span>Cancel</span></button> <button data-v-678181a9="" type="button" class="vi-button vi-byted-button vi-button--primary"><span>Confirm</span></button></div>
                  </div>
               </div>
            </div>
            <div class="dashboard-campaign-table-empty">
               <img src="./TikTok Ads Manager_files/campaign-empty.svg" class="empty-data-img"> 
               <div class="empty-data">No data </div>
            </div>
         </div>
         <div class="dashboard-gender dashboard-overview-body-gender">
            <div data-v-25641bae="" class="dashboard-header">
               <div data-v-25641bae="" class="dashboard-header-name">Gender
               </div>
               <div data-v-25641bae="" class="dashboard-header-select">
                  <div data-v-25641bae="" class="vi-select dashboard-gender-target-select vi-select--medium" style="max-height: 107px;">
                     <div class="vi-input vi-input--medium vi-input--suffix"><input type="text" autocomplete="off" dir="auto" placeholder="Select" readonly="readonly" class="vi-input__inner"><span class="vi-input__suffix"><span class="vi-input__suffix-inner"><i class="vi-select__caret vi-input__icon vi-icon-arrow-up"></i></span></span></div>
                     <div class="vi-select-dropdown vi-popper" style="display: none; min-width: 100px;">
                        <div class="vi-select-dropdown__filterable"></div>
                        <div class="vi-scrollbar">
                           <div class="vi-select-dropdown__wrap vi-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                              <ul class="vi-scrollbar__view vi-select-dropdown__list">
                                 <li class="vi-select-dropdown__item selected"><span>Cost</span></li>
                                 <li class="vi-select-dropdown__item"><span>Impressions</span></li>
                                 <li class="vi-select-dropdown__item"><span>Clicks</span></li>
                                 <li class="vi-select-dropdown__item"><span>CTR</span></li>
                                 <li class="vi-select-dropdown__item"><span>CPC</span></li>
                                 <li class="vi-select-dropdown__item"><span>CPA</span></li>
                                 <li class="vi-select-dropdown__item"><span>Conversions</span></li>
                                 <li class="vi-select-dropdown__item"><span>CVR</span></li>
                                 <li class="vi-select-dropdown__item"><span>CPM</span></li>
                              </ul>
                           </div>
                           <div class="vi-scrollbar__bar is-horizontal">
                              <div class="vi-scrollbar__thumb" style="transform: translateX(0%);"></div>
                           </div>
                           <div class="vi-scrollbar__bar is-vertical">
                              <div class="vi-scrollbar__thumb" style="transform: translateY(0%);"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <i width="100" data-v-25641bae="" aria-describedby="vi-tooltip-8364" tabindex="0" class="vi-icon-ex-export  export-button vi-tooltip" style="height: 20px;"></i>
               </div>
            </div>
            <div class="dashboard-pie dashboard-gender-chart">
               <div id="gender" data-highcharts-chart="10" class="dashboard-pie-gender">
                  <div id="highcharts-kb1tpgj-54" dir="ltr" class="highcharts-container " style="position: relative; overflow: hidden; width: 711px; height: 318px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: PingFangSC-Regular; font-size: 12px; color: rgb(70, 77, 98); min-width: 518px;">
                     <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="711" height="318" viewBox="0 0 711 318" class="highcharts-root" style="font-family: PingFangSC-Regular; font-size: 12px; color: rgb(70, 77, 98); min-width: 518px; fill: rgb(70, 77, 98);">
                        <desc>Created with Highcharts 6.2.0</desc>
                        <defs>
                           <clipPath id="highcharts-kb1tpgj-56">
                              <rect x="0" y="0" width="711" height="318" fill="none"></rect>
                           </clipPath>
                        </defs>
                        <rect fill="#ffffff" x="0" y="0" width="711" height="318" rx="0" ry="0" class="highcharts-background"></rect>
                        <rect fill="none" x="0" y="0" width="711" height="318" class="highcharts-plot-background"></rect>
                        <rect fill="none" data-z-index="1" x="0" y="0" width="711" height="318" class="highcharts-plot-border"></rect>
                        <g data-z-index="3" class="highcharts-series-group">
                           <g data-z-index="0.1" transform="translate(0,0) scale(1 1)" class="highcharts-series highcharts-series-0 highcharts-pie-series  highcharts-tracker" style="cursor: pointer;">
                              <path fill="#F7FBFF" d="M 355.478614313612 10.000002177845658 A 105 105 0 1 1 355.3541571065025 10.000101286475441 M 355.3958265046446 40.00007234748246 A 75 75 0 1 0 355.48472450972287 40.000001555604044 " transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round" class="highcharts-point highcharts-color-0"></path>
                           </g>
                           <g data-z-index="0.1" transform="translate(0,0) scale(1 1)" class="highcharts-markers highcharts-series-0 highcharts-pie-series "></g>
                        </g>
                        <text x="356" text-anchor="middle" data-z-index="4" y="14" class="highcharts-subtitle" style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);"></text>
                     </svg>
                     <span data-z-index="4" class="highcharts-title" style="font-family: PingFangSC-Regular; font-size: 18px; position: absolute; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 343px; top: 81px; color: rgb(51, 51, 51);">
                        <div style="height: 65px; display: flex; flex-direction: column; align-items: center; justify-content: center; font-family: PingFangSC; font-weight: 400;">
                           <div style="font-family: PingFangSC-Regular; font-size: 14px; color: rgb(70, 77, 98); text-align: center;">Cost</div>
                           <div style="font-family: STHeitiSC-Medium; font-size: 14px; color: rgb(70, 77, 98); line-height: 28px; text-align: center;">0.00</div>
                           <div style="font-family: PingFangSC-Regular; font-size: 12px; text-align: center;">
                              USD
                           </div>
                        </div>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="dashboard-overview-body">
         <div class="dashboard-placement dashboard-overview-body-placement">
            <div data-v-25641bae="" class="dashboard-header">
               <div data-v-25641bae="" class="dashboard-header-name">Placements
               </div>
               <div data-v-25641bae="" class="dashboard-header-select">
                  <div data-v-25641bae="" class="vi-select dashboard-placement-select vi-select--medium" style="max-height: 107px;">
                     <div class="vi-input vi-input--medium vi-input--suffix"><input type="text" autocomplete="off" dir="auto" placeholder="Select" readonly="readonly" class="vi-input__inner"><span class="vi-input__suffix"><span class="vi-input__suffix-inner"><i class="vi-select__caret vi-input__icon vi-icon-arrow-up"></i></span></span></div>
                     <div class="vi-select-dropdown vi-popper" style="display: none; min-width: 100px;">
                        <div class="vi-select-dropdown__filterable"></div>
                        <div class="vi-scrollbar">
                           <div class="vi-select-dropdown__wrap vi-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                              <ul class="vi-scrollbar__view vi-select-dropdown__list">
                                 <li class="vi-select-dropdown__item selected"><span>Cost</span></li>
                                 <li class="vi-select-dropdown__item"><span>Impressions</span></li>
                                 <li class="vi-select-dropdown__item"><span>Clicks</span></li>
                                 <li class="vi-select-dropdown__item"><span>CTR</span></li>
                                 <li class="vi-select-dropdown__item"><span>CPC</span></li>
                                 <li class="vi-select-dropdown__item"><span>CPA</span></li>
                                 <li class="vi-select-dropdown__item"><span>Conversions</span></li>
                                 <li class="vi-select-dropdown__item"><span>CVR</span></li>
                                 <li class="vi-select-dropdown__item"><span>CPM</span></li>
                              </ul>
                           </div>
                           <div class="vi-scrollbar__bar is-horizontal">
                              <div class="vi-scrollbar__thumb" style="transform: translateX(0%);"></div>
                           </div>
                           <div class="vi-scrollbar__bar is-vertical">
                              <div class="vi-scrollbar__thumb" style="transform: translateY(0%);"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <i width="100" data-v-25641bae="" aria-describedby="vi-tooltip-827" tabindex="0" class="vi-icon-ex-export  export-button vi-tooltip" style="height: 20px;"></i>
               </div>
            </div>
            <div class="dashboard-pie dashboard-placement-chart">
               <div id="placement" data-highcharts-chart="12" class="dashboard-pie-placement">
                  <div id="highcharts-kb1tpgj-229" dir="ltr" class="highcharts-container " style="position: relative; overflow: hidden; width: 1141px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: PingFangSC-Regular; font-size: 12px; color: rgb(70, 77, 98); min-width: 518px;">
                     <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1141" height="400" viewBox="0 0 1141 400" class="highcharts-root" style="font-family: PingFangSC-Regular; font-size: 12px; color: rgb(70, 77, 98); min-width: 518px; fill: rgb(70, 77, 98);">
                        <desc>Created with Highcharts 6.2.0</desc>
                        <defs>
                           <clipPath id="highcharts-kb1tpgj-231">
                              <rect x="0" y="0" width="1141" height="400" fill="none"></rect>
                           </clipPath>
                        </defs>
                        <rect fill="#ffffff" x="0" y="0" width="1141" height="400" rx="0" ry="0" class="highcharts-background"></rect>
                        <rect fill="none" x="0" y="0" width="1141" height="400" class="highcharts-plot-background"></rect>
                        <rect fill="none" data-z-index="1" x="0" y="0" width="1141" height="400" class="highcharts-plot-border"></rect>
                        <g data-z-index="3" class="highcharts-series-group">
                           <g data-z-index="0.1" transform="translate(0,0) scale(1 1)" class="highcharts-series highcharts-series-0 highcharts-pie-series highcharts-tracker " style="cursor: pointer;">
                              <path fill="#F7FBFF" visibility="hidden" d="M 570.478614313612 26.00000217784566 A 105 105 0 1 1 570.3541571065025 26.00010128647544 M 570.3555460864405 27.00010032184234 A 104 104 0 1 0 570.4788179868157 27.000002157104262 " data-z-index="-1" fill-opacity="0.25" class="highcharts-halo highcharts-color-0"></path>
                              <path fill="rgb(247,251,255)" d="M 570.478614313612 26.00000217784566 A 105 105 0 1 1 570.3541571065025 26.00010128647544 M 570.3958265046447 56.00007234748246 A 75 75 0 1 0 570.4847245097228 56.000001555604044 " transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round" class="highcharts-point highcharts-color-0 "></path>
                           </g>
                           <g data-z-index="0.1" transform="translate(0,0) scale(1 1)" class="highcharts-markers highcharts-series-0 highcharts-pie-series "></g>
                        </g>
                        <text x="571" text-anchor="middle" data-z-index="4" y="14" class="highcharts-subtitle" style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);"></text>
                     </svg>
                     <span data-z-index="4" class="highcharts-title" style="font-family: PingFangSC-Regular; font-size: 18px; position: absolute; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 558px; top: 97px; color: rgb(51, 51, 51);">
                        <div style="height: 65px; display: flex; flex-direction: column; align-items: center; justify-content: center; font-family: PingFangSC; font-weight: 400;">
                           <div style="font-family: PingFangSC-Regular; font-size: 14px; color: rgb(70, 77, 98); text-align: center;">Cost</div>
                           <div style="font-family: STHeitiSC-Medium; font-size: 14px; color: rgb(70, 77, 98); line-height: 28px; text-align: center;">0.00</div>
                           <div style="font-family: PingFangSC-Regular; font-size: 12px; text-align: center;">
                              USD
                           </div>
                        </div>
                     </span>
                  </div>
               </div>
               <div class="vi-loading-mask" style="display: none;">
                  <div class="vi-loading-spinner">
                     <svg viewBox="25 25 50 50" class="circular">
                        <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                     </svg>
                  </div>
               </div>
            </div>
         </div>
         <div class="dashboard-operation-system dashboard-overview-body-system">
            <div data-v-25641bae="" class="dashboard-header">
               <div data-v-25641bae="" class="dashboard-header-name">Operating System
               </div>
               <div data-v-25641bae="" class="dashboard-header-select"><i width="100" data-v-25641bae="" aria-describedby="vi-tooltip-715" tabindex="0" class="vi-icon-ex-export  export-button vi-tooltip" style="height: 20px;"></i></div>
            </div>
            <div id="operationSystem" class="dashboard-operation-system-box">
               <div class="dashboard-operation-system-box-bar">
                  <div data-highcharts-chart="5" class="dashboard-operation-system-box-bar-chart">
                     <div id="highcharts-kb1tpgj-15" dir="ltr" class="highcharts-container " style="position: relative; overflow: hidden; height: 30px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); transform: scale(1); width: 487px;">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="487" height="30" viewBox="0 0 487 30" class="highcharts-root" style="font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 12px; transform: scale(1);">
                           <desc>Created with Highcharts 6.2.0</desc>
                           <defs>
                              <clipPath id="highcharts-kb1tpgj-16">
                                 <rect x="0" y="0" width="30" height="487" fill="none"></rect>
                              </clipPath>
                           </defs>
                           <rect fill="#ffffff" x="0" y="0" width="487" height="30" rx="0" ry="0" class="highcharts-background"></rect>
                           <rect fill="none" x="0" y="0" width="487" height="30" class="highcharts-plot-background"></rect>
                           <rect fill="none" data-z-index="1" x="0" y="0" width="487" height="30" class="highcharts-plot-border"></rect>
                           <g data-z-index="1" class="highcharts-grid highcharts-xaxis-grid ">
                              <path fill="none" data-z-index="1" d="M 0 30.5 L 487 30.5" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 0 0.5 L 487 0.5" opacity="1" class="highcharts-grid-line"></path>
                           </g>
                           <g data-z-index="1" class="highcharts-grid highcharts-yaxis-grid ">
                              <path fill="none" data-z-index="1" d="M -0.5 0 L -0.5 30" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 243.5 0 L 243.5 30" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 486.5 0 L 486.5 30" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 48.5 0 L 48.5 30" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 96.5 0 L 96.5 30" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 145.5 0 L 145.5 30" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 194.5 0 L 194.5 30" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 291.5 0 L 291.5 30" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 340.5 0 L 340.5 30" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 389.5 0 L 389.5 30" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 437.5 0 L 437.5 30" opacity="1" class="highcharts-grid-line"></path>
                           </g>
                           <g data-z-index="2" class="highcharts-axis highcharts-xaxis ">
                              <path fill="none" stroke="#ccd6eb" stroke-width="1" data-z-index="7" d="M -0.5 0 L -0.5 30" class="highcharts-axis-line"></path>
                           </g>
                           <g data-z-index="2" class="highcharts-axis highcharts-yaxis ">
                              <path fill="none" data-z-index="7" d="M 0 30 L 487 30" class="highcharts-axis-line"></path>
                           </g>
                           <g data-z-index="3" class="highcharts-series-group">
                              <g data-z-index="0.1" transform="translate(487,30) rotate(90) scale(-1,1) scale(1 1)" clip-path="url(#highcharts-kb1tpgj-16)" width="487" height="30" class="highcharts-series highcharts-series-0 highcharts-bar-series  highcharts-tracker">
                                 <rect x="-0.5" y="-0.5" width="30" height="488" fill="#F7FBFF" stroke="#ffffff" stroke-width="1" class="highcharts-point"></rect>
                              </g>
                              <g data-z-index="0.1" transform="translate(487,30) rotate(90) scale(-1,1) scale(1 1)" clip-path="none" class="highcharts-markers highcharts-series-0 highcharts-bar-series "></g>
                           </g>
                           <text x="244" text-anchor="middle" data-z-index="4" y="14" class="highcharts-title" style="color: rgb(51, 51, 51); font-size: 18px; fill: rgb(51, 51, 51);"></text>
                           <text x="244" text-anchor="middle" data-z-index="4" y="14" class="highcharts-subtitle" style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);"></text>
                           <g data-z-index="7" class="highcharts-legend">
                              <rect fill="none" rx="0" ry="0" x="0" y="0" width="8" height="8" visibility="hidden" class="highcharts-legend-box"></rect>
                              <g data-z-index="1">
                                 <g></g>
                              </g>
                           </g>
                           <g data-z-index="7" class="highcharts-axis-labels highcharts-xaxis-labels "></g>
                           <g data-z-index="7" class="highcharts-axis-labels highcharts-yaxis-labels "></g>
                        </svg>
                     </div>
                  </div>
                  <div placement="top-start" class="vi-select vi-select--medium" style="max-height: 107px;">
                     <div class="vi-input vi-input--medium vi-input--suffix"><input type="text" autocomplete="off" dir="auto" placeholder="Select" readonly="readonly" class="vi-input__inner"><span class="vi-input__suffix"><span class="vi-input__suffix-inner"><i class="vi-select__caret vi-input__icon vi-icon-arrow-up"></i></span></span></div>
                     <div class="vi-select-dropdown vi-popper up-select" style="display: none; min-width: 140px;">
                        <div class="vi-select-dropdown__filterable"></div>
                        <div class="vi-scrollbar">
                           <div class="vi-select-dropdown__wrap vi-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                              <ul class="vi-scrollbar__view vi-select-dropdown__list">
                                 <li class="vi-select-dropdown__item selected"><span>Cost</span></li>
                                 <li class="vi-select-dropdown__item"><span>Impressions</span></li>
                                 <li class="vi-select-dropdown__item"><span>Clicks</span></li>
                                 <li class="vi-select-dropdown__item"><span>CTR</span></li>
                                 <li class="vi-select-dropdown__item"><span>CPC</span></li>
                                 <li class="vi-select-dropdown__item"><span>CPA</span></li>
                                 <li class="vi-select-dropdown__item"><span>Conversions</span></li>
                                 <li class="vi-select-dropdown__item"><span>CVR</span></li>
                                 <li class="vi-select-dropdown__item"><span>CPM</span></li>
                              </ul>
                           </div>
                           <div class="vi-scrollbar__bar is-horizontal">
                              <div class="vi-scrollbar__thumb" style="transform: translateX(0%);"></div>
                           </div>
                           <div class="vi-scrollbar__bar is-vertical">
                              <div class="vi-scrollbar__thumb" style="transform: translateY(0%);"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="vi-loading-mask" style="display: none;">
                     <div class="vi-loading-spinner">
                        <svg viewBox="25 25 50 50" class="circular">
                           <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                        </svg>
                     </div>
                  </div>
               </div>
               <div class="dashboard-operation-system-box-bar">
                  <div data-highcharts-chart="6" class="dashboard-operation-system-box-bar-chart">
                     <div id="highcharts-kb1tpgj-18" dir="ltr" class="highcharts-container " style="position: relative; overflow: hidden; height: 30px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); transform: scale(1); width: 487px;">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="487" height="30" viewBox="0 0 487 30" class="highcharts-root" style="font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 12px; transform: scale(1);">
                           <desc>Created with Highcharts 6.2.0</desc>
                           <defs>
                              <clipPath id="highcharts-kb1tpgj-19">
                                 <rect x="0" y="0" width="30" height="487" fill="none"></rect>
                              </clipPath>
                           </defs>
                           <rect fill="#ffffff" x="0" y="0" width="487" height="30" rx="0" ry="0" class="highcharts-background"></rect>
                           <rect fill="none" x="0" y="0" width="487" height="30" class="highcharts-plot-background"></rect>
                           <rect fill="none" data-z-index="1" x="0" y="0" width="487" height="30" class="highcharts-plot-border"></rect>
                           <g data-z-index="1" class="highcharts-grid highcharts-xaxis-grid ">
                              <path fill="none" data-z-index="1" d="M 0 30.5 L 487 30.5" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 0 0.5 L 487 0.5" opacity="1" class="highcharts-grid-line"></path>
                           </g>
                           <g data-z-index="1" class="highcharts-grid highcharts-yaxis-grid ">
                              <path fill="none" data-z-index="1" d="M -0.5 0 L -0.5 30" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 243.5 0 L 243.5 30" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 486.5 0 L 486.5 30" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 48.5 0 L 48.5 30" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 96.5 0 L 96.5 30" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 145.5 0 L 145.5 30" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 194.5 0 L 194.5 30" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 291.5 0 L 291.5 30" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 340.5 0 L 340.5 30" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 389.5 0 L 389.5 30" opacity="1" class="highcharts-grid-line"></path>
                              <path fill="none" data-z-index="1" d="M 437.5 0 L 437.5 30" opacity="1" class="highcharts-grid-line"></path>
                           </g>
                           <g data-z-index="2" class="highcharts-axis highcharts-xaxis ">
                              <path fill="none" stroke="#ccd6eb" stroke-width="1" data-z-index="7" d="M -0.5 0 L -0.5 30" class="highcharts-axis-line"></path>
                           </g>
                           <g data-z-index="2" class="highcharts-axis highcharts-yaxis ">
                              <path fill="none" data-z-index="7" d="M 0 30 L 487 30" class="highcharts-axis-line"></path>
                           </g>
                           <g data-z-index="3" class="highcharts-series-group">
                              <g data-z-index="0.1" transform="translate(487,30) rotate(90) scale(-1,1) scale(1 1)" clip-path="url(#highcharts-kb1tpgj-19)" width="487" height="30" class="highcharts-series highcharts-series-0 highcharts-bar-series  highcharts-tracker">
                                 <rect x="-0.5" y="-0.5" width="30" height="488" fill="#F7FBFF" stroke="#ffffff" stroke-width="1" class="highcharts-point"></rect>
                              </g>
                              <g data-z-index="0.1" transform="translate(487,30) rotate(90) scale(-1,1) scale(1 1)" clip-path="none" class="highcharts-markers highcharts-series-0 highcharts-bar-series "></g>
                           </g>
                           <text x="244" text-anchor="middle" data-z-index="4" y="14" class="highcharts-title" style="color: rgb(51, 51, 51); font-size: 18px; fill: rgb(51, 51, 51);"></text>
                           <text x="244" text-anchor="middle" data-z-index="4" y="14" class="highcharts-subtitle" style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);"></text>
                           <g data-z-index="7" class="highcharts-legend">
                              <rect fill="none" rx="0" ry="0" x="0" y="0" width="8" height="8" visibility="hidden" class="highcharts-legend-box"></rect>
                              <g data-z-index="1">
                                 <g></g>
                              </g>
                           </g>
                           <g data-z-index="7" class="highcharts-axis-labels highcharts-xaxis-labels "></g>
                           <g data-z-index="7" class="highcharts-axis-labels highcharts-yaxis-labels "></g>
                        </svg>
                     </div>
                  </div>
                  <div placement="top-start" class="vi-select vi-select--medium" style="max-height: 107px;">
                     <div class="vi-input vi-input--medium vi-input--suffix"><input type="text" autocomplete="off" dir="auto" placeholder="Select" readonly="readonly" class="vi-input__inner"><span class="vi-input__suffix"><span class="vi-input__suffix-inner"><i class="vi-select__caret vi-input__icon vi-icon-arrow-up"></i></span></span></div>
                     <div class="vi-select-dropdown vi-popper up-select" style="display: none; min-width: 140px;">
                        <div class="vi-select-dropdown__filterable"></div>
                        <div class="vi-scrollbar">
                           <div class="vi-select-dropdown__wrap vi-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                              <ul class="vi-scrollbar__view vi-select-dropdown__list">
                                 <li class="vi-select-dropdown__item"><span>Cost</span></li>
                                 <li class="vi-select-dropdown__item"><span>Impressions</span></li>
                                 <li class="vi-select-dropdown__item"><span>Clicks</span></li>
                                 <li class="vi-select-dropdown__item"><span>CTR</span></li>
                                 <li class="vi-select-dropdown__item"><span>CPC</span></li>
                                 <li class="vi-select-dropdown__item"><span>CPA</span></li>
                                 <li class="vi-select-dropdown__item selected"><span>Conversions</span></li>
                                 <li class="vi-select-dropdown__item"><span>CVR</span></li>
                                 <li class="vi-select-dropdown__item"><span>CPM</span></li>
                              </ul>
                           </div>
                           <div class="vi-scrollbar__bar is-horizontal">
                              <div class="vi-scrollbar__thumb" style="transform: translateX(0%);"></div>
                           </div>
                           <div class="vi-scrollbar__bar is-vertical">
                              <div class="vi-scrollbar__thumb" style="transform: translateY(0%);"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="vi-loading-mask" style="display: none;">
                     <div class="vi-loading-spinner">
                        <svg viewBox="25 25 50 50" class="circular">
                           <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                        </svg>
                     </div>
                  </div>
               </div>
               <div class="dashboard-operation-system-box-bar">
                  <div data-v-3250adb4="" class="dashboard-operation">
                     <div data-v-3250adb4="" class="dashboard-operation-item">
                        <div data-v-3250adb4="" class="dashboard-operation-item-icon" style="background: rgb(247, 251, 255);"></div>
                        <div data-v-3250adb4="" class="dashboard-operation-item-info">
                           <div data-v-3250adb4="" class="info-ratio">0.00%</div>
                        </div>
                     </div>
                     <div data-v-3250adb4="" class="dashboard-operation-item">
                        <div data-v-3250adb4="" class="dashboard-operation-item-icon" style="background: rgb(247, 251, 255);"></div>
                        <div data-v-3250adb4="" class="dashboard-operation-item-info">
                           <div data-v-3250adb4="" class="info-ratio">0.00%</div>
                        </div>
                     </div>
                  </div>
                  <div placement="top-start" class="vi-select vi-select--medium" style="max-height: 107px;">
                     <div class="vi-input vi-input--medium vi-input--suffix"><input type="text" autocomplete="off" dir="auto" placeholder="Select" readonly="readonly" class="vi-input__inner"><span class="vi-input__suffix"><span class="vi-input__suffix-inner"><i class="vi-select__caret vi-input__icon vi-icon-arrow-up"></i></span></span></div>
                     <div class="vi-select-dropdown vi-popper up-select" style="display: none; min-width: 140px;">
                        <div class="vi-select-dropdown__filterable"></div>
                        <div class="vi-scrollbar">
                           <div class="vi-select-dropdown__wrap vi-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                              <ul class="vi-scrollbar__view vi-select-dropdown__list">
                                 <li class="vi-select-dropdown__item"><span>Cost</span></li>
                                 <li class="vi-select-dropdown__item"><span>Impressions</span></li>
                                 <li class="vi-select-dropdown__item"><span>Clicks</span></li>
                                 <li class="vi-select-dropdown__item"><span>CTR</span></li>
                                 <li class="vi-select-dropdown__item"><span>CPC</span></li>
                                 <li class="vi-select-dropdown__item"><span>CPA</span></li>
                                 <li class="vi-select-dropdown__item"><span>Conversions</span></li>
                                 <li class="vi-select-dropdown__item selected"><span>CVR</span></li>
                                 <li class="vi-select-dropdown__item"><span>CPM</span></li>
                              </ul>
                           </div>
                           <div class="vi-scrollbar__bar is-horizontal">
                              <div class="vi-scrollbar__thumb" style="transform: translateX(0%);"></div>
                           </div>
                           <div class="vi-scrollbar__bar is-vertical">
                              <div class="vi-scrollbar__thumb" style="transform: translateY(0%);"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="vi-loading-mask" style="display: none;">
                     <div class="vi-loading-spinner">
                        <svg viewBox="25 25 50 50" class="circular">
                           <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                        </svg>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="dashboard-overview-body">
         <div class="dashboard-departing dashboard-overview-body-departing">
            <div data-v-25641bae="" class="dashboard-header">
               <div data-v-25641bae="" class="dashboard-header-name">Dayparting
               </div>
               <div data-v-25641bae="" class="dashboard-header-select">
                  <span data-v-26f33d58="" data-v-25641bae="" class="timezone"><span data-v-26f33d58="">Time Zone:</span>
                  UTC-05:00
                  <i data-v-cb71c8d8="" data-v-26f33d58="" aria-describedby="vi-tooltip-1416" tabindex="0" class="vi-icon-question vi-tooltip"></i></span> 
                  <div data-v-25641bae="" class="vi-select dashboard-departing-target-select vi-select--medium" style="max-height: 107px;">
                     <div class="vi-input vi-input--medium vi-input--suffix"><input type="text" autocomplete="off" dir="auto" placeholder="Select" readonly="readonly" class="vi-input__inner"><span class="vi-input__suffix"><span class="vi-input__suffix-inner"><i class="vi-select__caret vi-input__icon vi-icon-arrow-up"></i></span></span></div>
                     <div class="vi-select-dropdown vi-popper" style="display: none; min-width: 100px;">
                        <div class="vi-select-dropdown__filterable"></div>
                        <div class="vi-scrollbar">
                           <div class="vi-select-dropdown__wrap vi-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                              <ul class="vi-scrollbar__view vi-select-dropdown__list">
                                 <li class="vi-select-dropdown__item selected"><span>Cost</span></li>
                                 <li class="vi-select-dropdown__item"><span>Impressions</span></li>
                                 <li class="vi-select-dropdown__item"><span>Clicks</span></li>
                                 <li class="vi-select-dropdown__item"><span>CTR</span></li>
                                 <li class="vi-select-dropdown__item"><span>CPC</span></li>
                                 <li class="vi-select-dropdown__item"><span>CPA</span></li>
                                 <li class="vi-select-dropdown__item"><span>Conversions</span></li>
                                 <li class="vi-select-dropdown__item"><span>CVR</span></li>
                                 <li class="vi-select-dropdown__item"><span>CPM</span></li>
                              </ul>
                           </div>
                           <div class="vi-scrollbar__bar is-horizontal">
                              <div class="vi-scrollbar__thumb" style="transform: translateX(0%);"></div>
                           </div>
                           <div class="vi-scrollbar__bar is-vertical">
                              <div class="vi-scrollbar__thumb" style="transform: translateY(0%);"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div today="2021-08-05 23:59:59" data-v-25641bae="" class="vi-date-editor vi-input vi-input--suffix vi-date-editor--week"><input type="text" autocomplete="off" dir="auto" name="" placeholder="Select Week" class="vi-input__inner"><span class="vi-input__suffix"><span class="vi-input__suffix-inner"><span><i class="vi-input__icon vi-icon-date"></i></span></span></span></div>
                  <i width="100" data-v-25641bae="" aria-describedby="vi-tooltip-104" tabindex="0" class="vi-icon-ex-export  export-button vi-tooltip" style="height: 20px;"></i>
               </div>
            </div>
          
            <div class="row">
                <div class="col-8 bg-white">
                    <div class="row">
                        <div class="col-2">
                            <h3>Placements</h3>
                        </div>
                        <div class="col-8">
                        
                        
                        </div>
                        <div class="col-2">
                            <div class="form-group">

                                <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown">select
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                <li><a href="#">HTML</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">JavaScript</a></li>
                                </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 bg-white">
                    <div class="row">
                    <div class="col-8">
                        <h3>Operating system</h3>
                    </div> 
                    <div class="col-4">
                    </div>   
                    </div>
                </div>
                </div>
               
                

           
            <div class="row pb-3">
            <div class="col-7">
            <h3>Dayparting</h3>
            </div>
            <div class="col-5">
            <div class="row">

            
            <div class="col-6 d-flex  align-items-center">
           <span class="mr-1">Time Zone: UTC-05:00  </span>
           <div class="form-group">

                <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Select
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>  
                </div>
                </div>
            </div>
            <div class="col-6">
            <form>
            <div class="form-group">
            
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="select week">
        
            </div>
            </div>
            </div>
            </div>
            </div>
            
            <div class="row">
                <div class="col-12">
            <table class="table">

  <tbody>
    <tr>
      <th scope="row">sat</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      
    </tr>
    <tr>
      <th scope="row">Fri</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      
    </tr>
    <tr>
      <th scope="row">Thur</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      
    </tr>

    <tr>
      <th scope="row">Wed</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      
    </tr>
  

    <tr>
      <th scope="row">Tues</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      
    </tr>


    <tr>
      <th scope="row">Mon</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      
    </tr>

    
    <tr>
      <th scope="row">Sun</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      
    </tr>




    <tr>
     <th scope="col">0</th>
      <th scope="col">1</th>
      <th scope="col">2</th>
      <th scope="col">3</th>
      <th scope="col">4</th>
      <th scope="col">5</th>
      <th scope="col">6</th>
      <th scope="col">7</th>
      <th scope="col">8</th>
      <th scope="col">9</th>
      <th scope="col">10</th>
      <th scope="col">11</th>
      <th scope="col">12</th>
      <th scope="col">13</th>
      <th scope="col">14</th>
      <th scope="col">15</th>
      <th scope="col">16</th>
      <th scope="col">17</th>
      <th scope="col">18</th>
      <th scope="col">19</th>
      <th scope="col">20</th>
      <th scope="col">21</th>
      <th scope="col">22</th>
      <th scope="col">23</th>

      
    </tr>

  </tbody>
</table>
</div>
</div>
         </div>
      </div>
      <div style="position: relative;">
         <div style="display: none;"></div>
         <div class="mask" style="position: fixed; inset: 70px 0px 0px; background-color: rgba(0, 0, 0, 0.3); z-index: 80; display: none;"></div>
      </div>
   </div>
   <div class="__cov-progress" style="background-color: rgb(12, 229, 222) !important; opacity: 0; position: fixed; top: 0px; left: 0px; width: 0%; height: 2px; transition: opacity 0.6s ease 0s;"></div>
</div>
@endsection