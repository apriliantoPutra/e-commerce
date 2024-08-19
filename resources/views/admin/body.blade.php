    <section class="no-padding-top no-padding-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-user-1"></i></div><strong>Total User</strong>
                </div>
                <div class="number dashtext-1">{{ $user }}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-contract"></i></div><strong>Total Product</strong>
                </div>
                <div class="number dashtext-2">{{ $product }}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>Total Order</strong>
                </div>
                <div class="number dashtext-3">{{ $order }}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>Order Done</strong>
                </div>
                <div class="number dashtext-4">{{ $done }}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="no-padding-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <div class="bar-chart block no-margin-bottom">
              <canvas id="barChartExample1"></canvas>
            </div>
            <div class="bar-chart block">
              <canvas id="barChartExample2"></canvas>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="line-cahrt block">
              <canvas id="lineCahrt"></canvas>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="no-padding-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="stats-2-block block d-flex">
              <div class="stats-2 d-flex">
                <div class="stats-2-arrow low"><i class="fa fa-caret-down"></i></div>
                <div class="stats-2-content"><strong class="d-block">5.657</strong><span class="d-block">Standard Scans</span>
                  <div class="progress progress-template progress-small">
                    <div role="progressbar" style="width: 60%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-2"></div>
                  </div>
                </div>
              </div>
              <div class="stats-2 d-flex">
                <div class="stats-2-arrow height"><i class="fa fa-caret-up"></i></div>
                <div class="stats-2-content"><strong class="d-block">3.1459</strong><span class="d-block">Team Scans</span>
                  <div class="progress progress-template progress-small">
                    <div role="progressbar" style="width: 35%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-3"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="stats-3-block block d-flex">
              <div class="stats-3"><strong class="d-block">745</strong><span class="d-block">Total requests</span>
                <div class="progress progress-template progress-small">
                  <div role="progressbar" style="width: 35%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-1"></div>
                </div>
              </div>
              <div class="stats-3 d-flex justify-content-between text-center">
                <div class="item"><strong class="d-block strong-sm">4.124</strong><span class="d-block span-sm">Threats</span>
                  <div class="line"></div><small>+246</small>
                </div>
                <div class="item"><strong class="d-block strong-sm">2.147</strong><span class="d-block span-sm">Neutral</span>
                  <div class="line"></div><small>+416</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="drills-chart block">
              <canvas id="lineChart1"></canvas>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="no-padding-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <div class="user-block block text-center">
              <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid">
                <div class="order dashbg-2">1st</div>
              </div><a href="#" class="user-title">
                <h3 class="h5">Richard Nevoreski</h3><span>@richardnevo</span></a>
              <div class="contributions">950 Contributions</div>
              <div class="details d-flex">
                <div class="item"><i class="icon-info"></i><strong>150</strong></div>
                <div class="item"><i class="fa fa-gg"></i><strong>340</strong></div>
                <div class="item"><i class="icon-flow-branch"></i><strong>460</strong></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="user-block block text-center">
              <div class="avatar"><img src="img/avatar-4.jpg" alt="..." class="img-fluid">
                <div class="order dashbg-1">2nd</div>
              </div><a href="#" class="user-title">
                <h3 class="h5">Samuel Watson</h3><span>@samwatson</span></a>
              <div class="contributions">772 Contributions</div>
              <div class="details d-flex">
                <div class="item"><i class="icon-info"></i><strong>80</strong></div>
                <div class="item"><i class="fa fa-gg"></i><strong>420</strong></div>
                <div class="item"><i class="icon-flow-branch"></i><strong>272</strong></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="user-block block text-center">
              <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid">
                <div class="order dashbg-4">3rd</div>
              </div><a href="#" class="user-title">
                <h3 class="h5">Stephanie Larson</h3><span>@stephlarson</span></a>
              <div class="contributions">620 Contributions</div>
              <div class="details d-flex">
                <div class="item"><i class="icon-info"></i><strong>150</strong></div>
                <div class="item"><i class="fa fa-gg"></i><strong>340</strong></div>
                <div class="item"><i class="icon-flow-branch"></i><strong>460</strong></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="margin-bottom-sm">
      <div class="container-fluid">
        <div class="project">
          <div class="row bg-white has-shadow">
            <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
              <div class="project-title d-flex align-items-center">
                <div class="image has-shadow"><img src="img/project-1.jpg" alt="..." class="img-fluid"></div>
                <div class="text">
                  <h3 class="h4">Project Title</h3><small>Lorem Ipsum Dolor</small>
                </div>
              </div>
              <div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>
            </div>
            <div class="right-col col-lg-6 d-flex align-items-center">
              <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
              <div class="project-progress">
                <div class="progress">
                  <div role="progressbar" style="width: 50%; height: 6px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="no-padding-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <div class="stats-2-block block d-flex">
              <div class="stats-2 d-flex">
                <div class="stats-2-arrow low"><i class="fa fa-caret-down"></i></div>
                <div class="stats-2-content"><strong class="d-block">5.657</strong><span class="d-block">Standard Scans</span>
                  <div class="progress progress-template progress-small">
                    <div role="progressbar" style="width: 60%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-2"></div>
                  </div>
                </div>
              </div>
              <div class="stats-2 d-flex">
                <div class="stats-2-arrow height"><i class="fa fa-caret-up"></i></div>
                <div class="stats-2-content"><strong class="d-block">3.1459</strong><span class="d-block">Team Scans</span>
                  <div class="progress progress-template progress-small">
                    <div role="progressbar" style="width: 35%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-3"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="stats-3-block block d-flex">
              <div class="stats-3"><strong class="d-block">745</strong><span class="d-block">Total requests</span>
                <div class="progress progress-template progress-small">
                  <div role="progressbar" style="width: 35%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-1"></div>
                </div>
              </div>
              <div class="stats-3 d-flex justify-content-between text-center">
                <div class="item"><strong class="d-block strong-sm">4.124</strong><span class="d-block span-sm">Threats</span>
                  <div class="line"></div><small>+246</small>
                </div>
                <div class="item"><strong class="d-block strong-sm">2.147</strong><span class="d-block span-sm">Neutral</span>
                  <div class="line"></div><small>+416</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="drills-chart block">
              <canvas id="lineChart1"></canvas>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="no-padding-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <div class="user-block block text-center">
              <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid">
                <div class="order dashbg-2">1st</div>
              </div><a href="#" class="user-title">
                <h3 class="h5">Richard Nevoreski</h3><span>@richardnevo</span></a>
              <div class="contributions">950 Contributions</div>
              <div class="details d-flex">
                <div class="item"><i class="icon-info"></i><strong>150</strong></div>
                <div class="item"><i class="fa fa-gg"></i><strong>340</strong></div>
                <div class="item"><i class="icon-flow-branch"></i><strong>460</strong></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="user-block block text-center">
              <div class="avatar"><img src="img/avatar-4.jpg" alt="..." class="img-fluid">
                <div class="order dashbg-1">2nd</div>
              </div><a href="#" class="user-title">
                <h3 class="h5">Samuel Watson</h3><span>@samwatson</span></a>
              <div class="contributions">772 Contributions</div>
              <div class="details d-flex">
                <div class="item"><i class="icon-info"></i><strong>80</strong></div>
                <div class="item"><i class="fa fa-gg"></i><strong>420</strong></div>
                <div class="item"><i class="icon-flow-branch"></i><strong>272</strong></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="user-block block text-center">
              <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid">
                <div class="order dashbg-4">3rd</div>
              </div><a href="#" class="user-title">
                <h3 class="h5">Stephanie Larson</h3><span>@stephlarson</span></a>
              <div class="contributions">620 Contributions</div>
              <div class="details d-flex">
                <div class="item"><i class="icon-info"></i><strong>150</strong></div>
                <div class="item"><i class="fa fa-gg"></i><strong>340</strong></div>
                <div class="item"><i class="icon-flow-branch"></i><strong>460</strong></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
