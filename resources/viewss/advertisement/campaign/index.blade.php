@extends('advertisement.layout.app')
@section('title')
Dashboard
@endsection
@section('content')
<div class="row">
  <div class="col-12">
    <a href="{{ url('advertise/create-campaign') }}"><button type="button" class="btn btn-info float-right"
        data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Create
        Campaigns</button></a>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home">Campaigns</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu1">Add Group</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu2">Add</a>
      </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <div id="home" class=" tab-pane active">
        <div class="row my-1 py-1">
          <div class="col-4">
            <div class="row">
              <div class="col">
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6">
          </div>
          <div class="col-2">
            <div class="col">
              <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
          </div>
        </div>
        <!-- row-4 -->
        <div class="row">
          <div class="col-4 p-0 ">
            <table class="table" style="word-wrap:break-word;">
              <thead>
                <tr>
                  <th scope="col">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </th>
                  <th scope="col">On/Off</th>
                  <th scope="col">Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
              </tbody>
              <!-- row-4 -->
            </table>
          </div>
          <div class="col-8 p-0 ">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Status</th>
                    <th scope="col">Budget</th>
                    <th scope="col">Total Cost</th>
                    <th scope="col">CPC</th>
                    <th scope="col">CPM</th>
                    <th scope="col">Impression</th>
                    <th scope="col">Clicks</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active </td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div id="menu1" class=" tab-pane">
        <div class="row my-1 py-1">
          <div class="col-4">
            <div class="row">
              <div class="col">
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6">
          </div>
          <div class="col-2">
            <div class="col">
              <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
          </div>
        </div>
        <!-- row-4 -->
        <div class="row">
          <div class="col-4 p-0 ">
            <table class="table" style="word-wrap:break-word;">
              <thead>
                <tr>
                  <th scope="col">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </th>
                  <th scope="col">On/Off</th>
                  <th scope="col">Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
              </tbody>
              <!-- row-4 -->
            </table>
          </div>
          <div class="col-8 p-0 ">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Status</th>
                    <th scope="col">Budget</th>
                    <th scope="col">Total Cost</th>
                    <th scope="col">CPC</th>
                    <th scope="col">CPM</th>
                    <th scope="col">Impression</th>
                    <th scope="col">Clicks</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active </td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div id="menu2" class=" tab-pane">
        <div class="row my-1 py-1">
          <div class="col-4">
            <div class="row">
              <div class="col">
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6">
          </div>
          <div class="col-2">
            <div class="col">
              <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
          </div>
        </div>
        <!-- row-4 -->
        <div class="row">
          <div class="col-4 p-0 ">
            <table class="table" style="word-wrap:break-word;">
              <thead>
                <tr>
                  <th scope="col">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </th>
                  <th scope="col">On/Off</th>
                  <th scope="col">Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                      </label>
                    </div>
                  </td>
                  <td><label class="switch">
                      <input type="checkbox" checked="">
                      <span class="slider round"></span>
                    </label></td>
                  <td>default</td>
                </tr>
              </tbody>
              <!-- row-4 -->
            </table>
          </div>
          <div class="col-8 p-0 ">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Status</th>
                    <th scope="col">Budget</th>
                    <th scope="col">Total Cost</th>
                    <th scope="col">CPC</th>
                    <th scope="col">CPM</th>
                    <th scope="col">Impression</th>
                    <th scope="col">Clicks</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                    <th scope="col">CTR</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active </td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <td>Non Active</td>
                    <td>Active</td>
                    <td>No limit</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0.00 USD</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                    <td>0%</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection