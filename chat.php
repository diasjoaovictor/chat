<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex, nofollow" />

    <title>
      Bootstrap framework snippet Whatsapp web chat template - Bootsnipp.com
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />

    <style type="text/css">
    /*Emojis*/
    .wrapper{
      min-height: 10% !important;
    }
    /*Emojis*/

      html,
      body,
      div,
      span {
        overflow: hidden;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      body {
        background: url("http://shurl.esy.es/y") no-repeat fixed center;
        background-size: cover;
      }

      .fa-2x {
        font-size: 1.5em;
      }

      .app {
        position: relative;
        overflow: hidden;
        top: 19px;
        height: 80vh;
        padding: 0;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.06),
          0 2px 5px 0 rgba(0, 0, 0, 0.2);
      }

      .app-one {
        background-color: #f7f7f7;
        height: 100%;
        overflow: hidden;
        margin: 0;
        padding: 0;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.06),
          0 2px 5px 0 rgba(0, 0, 0, 0.2);
      }

      .side {
        padding: 0;
        margin: 0;
        height: 100%;
      }
      .side-one {
        padding: 0;
        margin: 0;
        height: 100%;
        width: 100%;
        z-index: 1;
        position: relative;
        display: block;
        top: 0;
      }

      .side-two {
        padding: 0;
        margin: 0;
        height: 100%;
        width: 100%;
        z-index: 2;
        position: relative;
        top: -100%;
        left: -100%;
        -webkit-transition: left 0.3s ease;
        transition: left 0.3s ease;
      }

      .heading {
        padding: 10px 16px 10px 15px;
        margin: 0;
        height: 60px;
        width: 100%;
        background-color: #eee;
        z-index: 1000;
      }

      .heading-avatar {
        padding: 0;
        cursor: pointer;
      }

      .heading-avatar-icon img {
        border-radius: 50%;
        height: 40px;
        width: 40px;
      }

      .heading-name {
        padding: 0 !important;
        cursor: pointer;
        max-height: 100%;
      }

      .heading-name-meta {
        font-weight: 700;
        font-size: 100%;
        padding: 5px;
        padding-bottom: 0;
        text-align: left;
        text-overflow: ellipsis;
        white-space: nowrap;
        color: #000;
        display: block;
      }
      .heading-online {
        display: none;
        padding: 0 5px;
        font-size: 12px;
        color: #93918f;
      }
      .heading-compose {
        padding: 0;
      }

      .heading-compose i {
        text-align: center;
        padding: 5px;
        color: #93918f;
        cursor: pointer;
      }

      .heading-dot {
        padding: 0;
        margin-left: 10px;
      }

      .heading-dot i {
        text-align: right;
        padding: 5px;
        color: #93918f;
        cursor: pointer;
      }

      .searchBox {
        padding: 0 !important;
        margin: 0 !important;
        height: 60px;
        width: 100%;
      }

      .searchBox-inner {
        height: 100%;
        width: 100%;
        padding: 10px !important;
        background-color: #fbfbfb;
      }

      /*#searchBox-inner input {
          box-shadow: none;
        }*/

      .searchBox-inner input:focus {
        outline: none;
        border: none;
        box-shadow: none;
      }

      .sideBar {
        padding: 0 !important;
        margin: 0 !important;
        background-color: #fff;
        overflow-y: auto;
        border: 1px solid #f7f7f7;
        height: calc(100% - 120px);
      }

      .sideBar-body {
        position: relative;
        padding: 10px !important;
        border-bottom: 1px solid #f7f7f7;
        height: 72px;
        margin: 0 !important;
        cursor: pointer;
      }

      .sideBar-body:hover {
        background-color: #f2f2f2;
      }

      .sideBar-avatar {
        text-align: center;
        padding: 0 !important;
      }

      .avatar-icon img {
        border-radius: 50%;
        height: 49px;
        width: 49px;
      }

      .sideBar-main {
        padding: 0 !important;
      }

      .sideBar-main .row {
        padding: 0 !important;
        margin: 0 !important;
      }

      .sideBar-name {
        padding: 5px !important;
        display: flex;
        flex-direction: column;
      }

      .name-meta {
        font-size: 100%;
        padding: 1% !important;
        text-align: left;
        text-overflow: ellipsis;
        white-space: nowrap;
        color: #000;
      }
      .info-meta {
        font-size: 80%;
        padding: 1% !important;
        text-align: left;
        text-overflow: ellipsis;
        white-space: nowrap;
        color: #000;
      }
      .sideBar-time {
        padding: 10px !important;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
      }

      .time-meta {
        text-align: right;
        font-size: 12px;
        padding: 1% !important;
        color: rgba(0, 0, 0, 0.4);
        vertical-align: baseline;
        margin-bottom: 2%;
      }

      .number-msg {
          text-align: center;
          font-size: 65%;
          color: rgba(0, 0, 0, 0.4);
          vertical-align: baseline;
          background-color: #23d85b;
          width: 18px;
          border: 1px #23d85b solid;
          border-radius: 50%;
          height: 20px;
          display: flex;
          justify-content: center;
          align-items: center;
          color: #fff;
          margin-left: 75%;
      }

      /*New Message*/

      .newMessage {
        padding: 0 !important;
        margin: 0 !important;
        height: 100%;
        position: relative;
        left: -100%;
      }
      .newMessage-heading {
        padding: 10px 16px 10px 15px !important;
        margin: 0 !important;
        height: 100px;
        width: 100%;
        background-color: #00bfa5;
        z-index: 1001;
      }

      .newMessage-main {
        padding: 10px 16px 0 15px !important;
        margin: 0 !important;
        height: 60px;
        margin-top: 30px !important;
        width: 100%;
        z-index: 1001;
        color: #fff;
      }

      .newMessage-title {
        font-size: 18px;
        font-weight: 700;
        padding: 10px 5px !important;
      }
      .newMessage-back {
        text-align: center;
        vertical-align: baseline;
        padding: 12px 5px !important;
        display: block;
        cursor: pointer;
      }
      .newMessage-back i {
        margin: auto !important;
      }

      .composeBox {
        padding: 0 !important;
        margin: 0 !important;
        height: 60px;
        width: 100%;
      }

      .composeBox-inner {
        height: 100%;
        width: 100%;
        padding: 10px !important;
        background-color: #fbfbfb;
      }

      .composeBox-inner input:focus {
        outline: none;
        border: none;
        box-shadow: none;
      }

      .compose-sideBar {
        padding: 0 !important;
        margin: 0 !important;
        background-color: #fff;
        overflow-y: auto;
        border: 1px solid #f7f7f7;
        height: calc(100% - 160px);
      }

      /*Conversation*/

      .conversation {
        padding: 0 !important;
        margin: 0 !important;
        height: 100%;
        /*width: 100%;*/
        border-left: 1px solid rgba(0, 0, 0, 0.08);
        /*overflow-y: auto;*/
      }

      .message {
        padding: 0 !important;
        margin: 0 !important;
        background: url("w.jpg") no-repeat fixed center;
        background-size: cover;
        overflow-y: auto;
        border: 1px solid #f7f7f7;
        height: calc(100% - 140px);
      }
      .message-previous {
        margin: 0 !important;
        padding: 0 !important;
        height: auto;
        width: 100%;
      }
      .previous {
        font-size: 15px;
        text-align: center;
        padding: 10px !important;
        cursor: pointer;
      }

      .previous a {
        text-decoration: none;
        font-weight: 700;
      }

      .message-body {
        margin: 0 !important;
        padding: 0 !important;
        width: auto;
        height: auto;
      }

      .message-main-receiver {
        /*padding: 10px 20px;*/
        max-width: 60%;
      }

      .message-main-sender {
        padding: 3px 20px !important;
        margin-left: 40% !important;
        max-width: 60%;
      }

      .message-text {
        margin: 0 !important;
        padding: 5px !important;
        word-wrap: break-word;
        font-weight: 200;
        font-size: 14px;
        padding-bottom: 0 !important;
      }

      .message-time {
        margin: 0 !important;
        font-size: 12px;
        text-align: right;
        color: #9a9a9a;
      }

      .receiver {
        width: auto !important;
        padding: 4px 10px 7px !important;
        border-radius: 10px 10px 10px 0;
        background: #ffffff;
        font-size: 12px;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        word-wrap: break-word;
        display: inline-block;
      }

      .sender {
        float: right;
        width: auto !important;
        background: #dcf8c6;
        border-radius: 10px 10px 0 10px;
        padding: 4px 10px 7px !important;
        font-size: 12px;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        display: inline-block;
        word-wrap: break-word;
      }

      /*Reply*/

      .reply {
        height: 60px;
        width: 100%;
        background-color: #f5f1ee;
        padding: 10px 5px 10px 5px !important;
        margin: 0 !important;
        z-index: 1000;
      }

      .reply-emojis {
        padding: 5px !important;
      }

      .reply-emojis i {
        text-align: center;
        padding: 5px 5px 5px 5px !important;
        color: #93918f;
        cursor: pointer;
      }

      .reply-recording {
        padding: 5px !important;
      }

      .reply-recording i {
        text-align: center;
        padding: 5px !important;
        color: #93918f;
        cursor: pointer;
      }

      .reply-send {
        padding: 5px !important;
      }

      .reply-send i {
        text-align: center;
        padding: 5px !important;
        color: #93918f;
        cursor: pointer;
      }

      .reply-main {
        padding: 2px 5px !important;
      }

      .reply-main textarea {
        width: 100%;
        resize: none;
        overflow: hidden;
        padding: 5px !important;
        outline: none;
        border: none;
        text-indent: 5px;
        box-shadow: none;
        height: 100%;
        font-size: 16px;
      }

      .reply-main textarea:focus {
        outline: none;
        border: none;
        text-indent: 5px;
        box-shadow: none;
      }

      @media screen and (max-width: 700px) {
        .app {
          top: 0;
          height: 100%;
        }
        .heading {
          height: 70px;
          background-color: #009688;
        }
        .fa-2x {
          font-size: 2.3em !important;
        }
        .heading-avatar {
          padding: 0 !important;
        }
        .heading-avatar-icon img {
          height: 50px;
          width: 50px;
        }
        .heading-compose {
          padding: 5px !important;
        }
        .heading-compose i {
          color: #fff;
          cursor: pointer;
        }
        .heading-dot {
          padding: 5px !important;
          margin-left: 10px !important;
        }
        .heading-dot i {
          color: #fff;
          cursor: pointer;
        }
        .sideBar {
          height: calc(100% - 130px);
        }
        .sideBar-body {
          height: 80px;
        }
        .sideBar-avatar {
          text-align: left;
          padding: 0 8px !important;
        }
        .avatar-icon img {
          height: 55px;
          width: 55px;
        }
        .sideBar-main {
          padding: 0 !important;
        }
        .sideBar-main .row {
          padding: 0 !important;
          margin: 0 !important;
        }
        .name-meta {
          font-size: 16px;
          padding: 5% !important;
        }
        

        .time-meta {
          text-align: right;
          font-size: 14px;
          padding: 4% !important;
          color: rgba(0, 0, 0, 0.4);
          vertical-align: baseline;
        }

        /*Conversation*/
        .conversation {
          padding: 0 !important;
          margin: 0 !important;
          height: 100%;
          /*width: 100%;*/
          border-left: 1px solid rgba(0, 0, 0, 0.08);
          /*overflow-y: auto;*/
        }
        .message {
          height: calc(100% - 140px);
        }
        .reply {
          height: 70px;
        }
        .reply-emojis {
          padding: 5px 0 !important;
        }
        .reply-emojis i {
          padding: 5px 2px !important;
          font-size: 1.8em !important;
        }
        .reply-main {
          padding: 2px 8px !important;
        }
        .reply-main textarea {
          padding: 8px !important;
          font-size: 18px;
        }
        .reply-recording {
          padding: 5px 0 !important;
        }
        .reply-recording i {
          padding: 5px 0 !important;
          font-size: 1.8em !important;
        }
        .reply-send {
          padding: 5px 0 !important;
        }
        .reply-send i {
          padding: 5px 2px 5px 0 !important;
          font-size: 1.8em !important;
        }
      }

      ..dropbtn-conversation,
      .dropbtn-menu {
        border: none;
        cursor: pointer;
      }

      .dropdown-content {
        position: absolute;
        right: 0;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgb(0 0 0 / 20%);
        z-index: 1;
        height: auto;
        width: auto;
        margin-top: 3%;
        margin-right: 4%;
      }

      .dropdown-content-menu {
        position: absolute;
        right: 0;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgb(0 0 0 / 20%);
        z-index: 1;
        height: auto;
        width: auto;
        margin-top: 6%;
        margin-right: 8%;
      }

      .dropdown-content a,
      .dropdown-content-menu a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }

      .dropdown-content a:hover,
      .dropdown-content-menu a:hover {
        background-color: #f1f1f1;
      }

      .dropup-content-paperclip {
        display: none;
        position: absolute;
        min-width: 100px;
        bottom: 50px;
        z-index: 1;
        width: auto;
        height: auto;
        margin-left: 30px;
      }

    .dropup-content-paperclip a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: flex;
      border: 1px #000 solid;
      border-radius: 100%;
      margin: 10%;
      margin-left: 30%;
      width: 45%;
      justify-content: center;
      height: 45px;
      transition: 0.5s;
    }
    .dropup-content-paperclip a:hover{
      transform: scale(1.05);
    }

      .message-bottom{
        display: flex;
        justify-content: flex-end;
      }

      .message-check{
        width: auto;
        padding-left: 5%;
        padding-right: 5%;
        color: #9a9a9a;
      }

      .chat__msg-status-icon {
          color: #B3B3B3;
          margin-left: 3px;
      }
      .chat__msg-status-icon--blue {
          color: #0DA9E5;
      }

      .heading-name-2{
        border-left: 2px #93918f solid;
        margin-left: 2%;
        max-height: 100%;
      }
      .info-user{
        
        word-break: break-all;
      }
    </style>
    <script src="assets/chat/js/jquery-1.11.1.min.js"></script>
    <script src="assets/chat/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      window.alert = function () {};
      var defaultCSS = document.getElementById("bootstrap-css");
      function changeCSS(css) {
        if (css)
          $("head > link")
            .filter(":first")
            .replaceWith(
              '<link rel="stylesheet" href="' + css + '" type="text/css" />'
            );
        else $("head > link").filter(":first").replaceWith(defaultCSS);
      }
      $(document).ready(function () {
        var iframe_height = parseInt($("html").height());
        window.parent.postMessage(iframe_height, "https://bootsnipp.com");
      });
    </script>
  </head>
  <body>
    <link rel="stylesheet" href="assets/chat/css/font-awesome.min.css" />
    <div class="container app">
      <div class="row app-one">
        <div class="col-sm-4 side">
          <div class="side-one">
            <div class="row heading">
              <div class="col-sm-3 col-xs-3 heading-avatar">
                <div class="heading-avatar-icon">
                  <img src="assets/chat/img/avatar1.png" />
                </div>
              </div>
              <div
                class="col-sm-1 col-xs-1 heading-dot pull-right dropbtn-menu"
                onclick="alterDisplay('.dropdown-content-menu')"
              >
                <i
                  class="fa fa-ellipsis-v fa-2x pull-right"
                  aria-hidden="true"
                ></i>
              </div>
              <div class="dropdown-content-menu" style="display: none">
                <a class="dropdown-item" href="#">Novo grupo</a>
                <a class="dropdown-item" href="#">Criar uma sala</a>
                <a class="dropdown-item" href="#">Arquivadas</a>
                <a class="dropdown-item" href="#">Favoritas</a>
                <a class="dropdown-item" href="#">Silenciar notificações</a>
                <a class="dropdown-item" href="#">Configurações</a>
                <a class="dropdown-item" href="#">Desconectar</a>
              </div>
              <div class="col-sm-2 col-xs-2 heading-compose pull-right">
                <i
                  class="fa fa-comments fa-2x pull-right"
                  aria-hidden="true"
                ></i>
              </div>
            </div>

            <div class="row searchBox">
              <div class="col-sm-10 searchBox-inner">
                <div class="form-group has-feedback">
                  <input
                    id="searchText"
                    type="text"
                    class="form-control"
                    name="searchText"
                    placeholder="Search"
                  />
                  <span
                    class="glyphicon glyphicon-search form-control-feedback"
                  ></span>
                </div>
              </div>
            </div>

            <div class="row sideBar">
              <div class="row sideBar-body">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                  <div class="avatar-icon">
                    <img src="assets/chat/img/avatar1.png" />
                  </div>
                </div>
                <div class="col-sm-9 col-xs-9 sideBar-main">
                  <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                      <span class="name-meta">John Doe </span>
                      <span class="info-meta">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                      <span class="time-meta pull-right">18:18</span>
                      <span class="number-msg pull-right">10</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row sideBar-body">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                  <div class="avatar-icon">
                    <img src="assets/chat/img/avatar2.png" />
                  </div>
                </div>
                <div class="col-sm-9 col-xs-9 sideBar-main">
                  <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                      <span class="name-meta">John Doe </span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                      <span class="time-meta pull-right">18:18 </span>
                      <span class="number-msg pull-right">2</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row sideBar-body">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                  <div class="avatar-icon">
                    <img src="assets/chat/img/avatar3.png" />
                  </div>
                </div>
                <div class="col-sm-9 col-xs-9 sideBar-main">
                  <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                      <span class="name-meta">John Doe </span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                      <span class="time-meta pull-right">18:18 </span>
                      <span class="number-msg pull-right">101</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row sideBar-body">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                  <div class="avatar-icon">
                    <img src="assets/chat/img/avatar4.png" />
                  </div>
                </div>
                <div class="col-sm-9 col-xs-9 sideBar-main">
                  <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                      <span class="name-meta">John Doe </span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                      <span class="time-meta pull-right">18:18 </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row sideBar-body">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                  <div class="avatar-icon">
                    <img src="assets/chat/img/avatar5.png" />
                  </div>
                </div>
                <div class="col-sm-9 col-xs-9 sideBar-main">
                  <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                      <span class="name-meta">John Doe </span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                      <span class="time-meta pull-right">18:18 </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row sideBar-body">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                  <div class="avatar-icon">
                    <img src="assets/chat/img/avatar6.png" />
                  </div>
                </div>
                <div class="col-sm-9 col-xs-9 sideBar-main">
                  <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                      <span class="name-meta">John Doe </span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                      <span class="time-meta pull-right">18:18 </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row sideBar-body">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                  <div class="avatar-icon">
                    <img src="assets/chat/img/avatar1.png" />
                  </div>
                </div>
                <div class="col-sm-9 col-xs-9 sideBar-main">
                  <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                      <span class="name-meta">John Doe </span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                      <span class="time-meta pull-right">18:18 </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row sideBar-body">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                  <div class="avatar-icon">
                    <img src="assets/chat/img/avatar2.png" />
                  </div>
                </div>
                <div class="col-sm-9 col-xs-9 sideBar-main">
                  <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                      <span class="name-meta">John Doe </span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                      <span class="time-meta pull-right">18:18 </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row sideBar-body">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                  <div class="avatar-icon">
                    <img src="assets/chat/img/avatar3.png" />
                  </div>
                </div>
                <div class="col-sm-9 col-xs-9 sideBar-main">
                  <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                      <span class="name-meta">John Doe </span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                      <span class="time-meta pull-right">18:18 </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row sideBar-body">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                  <div class="avatar-icon">
                    <img src="assets/chat/img/avatar4.png" />
                  </div>
                </div>
                <div class="col-sm-9 col-xs-9 sideBar-main">
                  <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                      <span class="name-meta">John Doe </span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                      <span class="time-meta pull-right">18:18 </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="side-two">
            <div class="row newMessage-heading">
              <div class="row newMessage-main">
                <div class="col-sm-2 col-xs-2 newMessage-back">
                  <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </div>
                <div class="col-sm-10 col-xs-10 newMessage-title">New Chat</div>
              </div>
            </div>

            <div class="row composeBox">
              <div class="col-sm-12 composeBox-inner">
                <div class="form-group has-feedback">
                  <input
                    id="composeText"
                    type="text"
                    class="form-control"
                    name="searchText"
                    placeholder="Search People"
                  />
                  <span
                    class="glyphicon glyphicon-search form-control-feedback"
                  ></span>
                </div>
              </div>
            </div>

            <div class="row compose-sideBar">
              <div class="row sideBar-body">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                  <div class="avatar-icon">
                    <img src="assets/chat/img/avatar1.png" />
                  </div>
                </div>
                <div class="col-sm-9 col-xs-9 sideBar-main">
                  <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                      <span class="name-meta">John Doe </span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                      <span class="time-meta pull-right">18:18 </span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row sideBar-body">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                  <div class="avatar-icon">
                    <img src="assets/chat/img/avatar2.png" />
                  </div>
                </div>
                <div class="col-sm-9 col-xs-9 sideBar-main">
                  <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                      <span class="name-meta">John Doe </span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                      <span class="time-meta pull-right">18:18 </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row sideBar-body">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                  <div class="avatar-icon">
                    <img src="assets/chat/img/avatar3.png" />
                  </div>
                </div>
                <div class="col-sm-9 col-xs-9 sideBar-main">
                  <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                      <span class="name-meta">John Doe </span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                      <span class="time-meta pull-right">18:18 </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row sideBar-body">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                  <div class="avatar-icon">
                    <img src="assets/chat/img/avatar4.png" />
                  </div>
                </div>
                <div class="col-sm-9 col-xs-9 sideBar-main">
                  <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                      <span class="name-meta">John Doe </span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                      <span class="time-meta pull-right">18:18 </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row sideBar-body">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                  <div class="avatar-icon">
                    <img src="assets/chat/img/avatar5.png" />
                  </div>
                </div>
                <div class="col-sm-9 col-xs-9 sideBar-main">
                  <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                      <span class="name-meta">John Doe </span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                      <span class="time-meta pull-right">18:18 </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row sideBar-body">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                  <div class="avatar-icon">
                    <img src="assets/chat/img/avatar6.png" />
                  </div>
                </div>
                <div class="col-sm-9 col-xs-9 sideBar-main">
                  <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                      <span class="name-meta">John Doe </span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                      <span class="time-meta pull-right">18:18 </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row sideBar-body">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                  <div class="avatar-icon">
                    <img src="assets/chat/img/avatar2.png" />
                  </div>
                </div>
                <div class="col-sm-9 col-xs-9 sideBar-main">
                  <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                      <span class="name-meta">John Doe </span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                      <span class="time-meta pull-right">18:18 </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row sideBar-body">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                  <div class="avatar-icon">
                    <img src="assets/chat/img/avatar3.png" />
                  </div>
                </div>
                <div class="col-sm-9 col-xs-9 sideBar-main">
                  <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                      <span class="name-meta">John Doe </span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                      <span class="time-meta pull-right">18:18 </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row sideBar-body">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                  <div class="avatar-icon">
                    <img src="assets/chat/img/avatar4.png" />
                  </div>
                </div>
                <div class="col-sm-9 col-xs-9 sideBar-main">
                  <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                      <span class="name-meta">John Doe </span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                      <span class="time-meta pull-right">18:18 </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row sideBar-body">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                  <div class="avatar-icon">
                    <img src="assets/chat/img/avatar5.png" />
                  </div>
                </div>
                <div class="col-sm-9 col-xs-9 sideBar-main">
                  <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                      <span class="name-meta">John Doe </span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                      <span class="time-meta pull-right">18:18 </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-8 conversation">
          <div class="row heading">
            <div class="col-sm-2 col-md-1 col-xs-3 heading-avatar">
              <div class="heading-avatar-icon">
                <img src="assets/chat/img/avatar6.png" />
              </div>
            </div>
            <div class="col-sm-4 col-xs-3 heading-name">
              <a class="heading-name-meta">John Doe </a>
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec maximus ipsum. Suspendisse sollicitudin nisl lacus, vulputate tincidunt velit condimentum sollicitudin. Phasellus lacinia eleifend tincidunt.</span>
            </div>
            <div class="col-sm-4 col-xs-3 heading-name-2">
              <span class="info-user">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec maximus ipsum. Suspendisse sollicitudin nisl lacus, vulputate tincidunt velit condimentum sollicitudin. Phasellus lacinia eleifend tincidunt.</span>
            </div>

            <div
              class="
                col-sm-1 col-xs-1
                heading-dot
                pull-right
                dropbtn-conversation
              "
              onclick="alterDisplay('.dropdown-content')"
            >
              <i
                class="fa fa-ellipsis-v fa-2x pull-right"
                aria-hidden="true"
              ></i>
            </div>
            <div class="dropdown-content" style="display: none">
              <a class="dropdown-item" href="#">Dados do contato</a>
              <a class="dropdown-item" href="#">Denunciar empresa</a>
              <a class="dropdown-item" href="#">Bloquear</a>
              <a class="dropdown-item" href="#">Selecionar mensagem</a>
              <a class="dropdown-item" href="#">Silenciar notificações</a>
              <a class="dropdown-item" href="#">Limpar mensagens</a>
              <a class="dropdown-item" href="#">Apagar conversa</a>
            </div>
          </div>

          <div class="row message" id="conversation">
            <div class="row message-previous">
              <div class="col-sm-12 previous">
                <a onclick="previous(this)" id="ankitjain28" name="20">
                  Show Previous Message!
                </a>
              </div>
            </div>

            <div class="row message-body">
              <div class="col-sm-12 message-main-receiver">
                <div class="receiver">
                  <div class="message-text">Hi, what are you doing?!</div>
                  <span class="message-time pull-right"> 20:00</span>
                </div>
              </div>
            </div>

            <div class="row message-body">
              <div class="col-sm-12 message-main-sender">
                <div class="sender">
                  <div class="message-text">I am doing nothing man!</div>
                  <div class="message-bottom">
                    <span class="message-time pull-right"> 20:00</span>
                    <span class="message-check pull-right">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="16" height="15" aria-label="read" class="chat__msg-status-icon chat__msg-status-icon--blue" style="&#10;    color: #0DA9E5;&#10;"><path fill="currentColor" d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.879a.32.32 0 0 1-.484.033l-.358-.325a.319.319 0 0 0-.484.032l-.378.483a.418.418 0 0 0 .036.541l1.32 1.266c.143.14.361.125.484-.033l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.879a.32.32 0 0 1-.484.033L1.891 7.769a.366.366 0 0 0-.515.006l-.423.433a.364.364 0 0 0 .006.514l3.258 3.185c.143.14.361.125.484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z"/></svg>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row message-body">
              <div class="col-sm-12 message-main-sender">
                <div class="sender">
                  <div class="message-text">and you?</div>
                  <div class="message-bottom">
                    <span class="message-time pull-right"> 20:01</span>
                    <span class="message-check pull-right">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="16" height="15" aria-label="delivered" class="chat__msg-status-icon "><path fill="currentColor" d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.879a.32.32 0 0 1-.484.033l-.358-.325a.319.319 0 0 0-.484.032l-.378.483a.418.418 0 0 0 .036.541l1.32 1.266c.143.14.361.125.484-.033l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.879a.32.32 0 0 1-.484.033L1.891 7.769a.366.366 0 0 0-.515.006l-.423.433a.364.364 0 0 0 .006.514l3.258 3.185c.143.14.361.125.484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z"></path></svg>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row reply">
            <div class="col-sm-1 col-xs-1 reply-emojis">
              <i id="emoji-button" class="fa fa-smile-o fa-2x"></i>
            </div>
            <div class="col-sm-1 col-xs-1 reply-emojis">
              <i class="fa fa-paperclip fa-2x" aria-hidden="true" onclick="alterDisplay('.dropup-content-paperclip')" id="anex"></i>
            </div>
            <div class="dropup-content-paperclip" id="anexGrop">
              <a href="#" style="background-color: #4079ec;border-color:#4079ec"><i class="fa fa-video-camera" aria-hidden="true" style="font-size: 20px;color:white"></i></a>
              <a href="#" style="background-color: #0eabf4;border-color:#0eabf4;"><i class="fa fa-user" aria-hidden="true" style="font-size: 20px;color:white"></i></a>
              <a href="#" style="background-color: #5157ae;border-color:#5157ae;"><i class="fa fa-file" aria-hidden="true" style="font-size: 20px;color:white"></i></a>
              <a href="#" style="background-color: #ec407a;border-color:#ec407a;"><i class="fa fa-camera" aria-hidden="true" style="font-size: 20px;color:white"></i></a>
              <a href="#" style="background-color: #bf59cf;border-color:#bf59cf"><i class="fa fa-picture-o" aria-hidden="true" style="font-size: 20px;color:white"></i></a>   
            </div>
            <div class="col-sm-9 col-xs-9 reply-main">
              <textarea class="form-control" rows="1" id="comment"></textarea>
            </div>
            <div class="col-sm-1 col-xs-1 reply-recording">
              <i class="fa fa-microphone fa-2x" aria-hidden="true"></i>
            </div>
            <div class="col-sm-1 col-xs-1 reply-send">
              <i class="fa fa-send fa-2x" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      $(function () {
        $(".heading-compose").click(function () {
          $(".side-two").css({
            left: "0",
          });
        });

        $(".newMessage-back").click(function () {
          $(".side-two").css({
            left: "-100%",
          });
        });
      });
    </script>
    <script>
      const alterDisplay = (elem) => {
        element = document.querySelector(elem);

        if (element.style.display === "none") {
          element.style.display = "block";
          console.log(element.style.display, "block");
        } else {
          element.style.display = "none";
          console.log(element.style.display, "none");
        }
      };
    </script>
  </body>
</html>
