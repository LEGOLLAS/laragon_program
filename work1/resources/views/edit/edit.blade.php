<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>수정하기</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"></button>
           <a class="navbar-brand hidden-xs" href="http://localhost/work1/public/">CRUD HONG</a>
           <form class="navbar-form pull-left" action='search' role="search" method="get">
              <div class="input-group">
                 <input type="text" class="form-control" placeholder="Search" name='search' value="">
                 <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                 </div>
              </div>
           </form>
        </div>
        <div class="navbar-collapse collapse">
           <ul class="nav navbar-nav navbar-right">
              <li><a href="http://localhost/work1/public/">HOME</a></li>
              <li><a href="http://localhost/work1/public/mypage">MYPAGE</a></li>
              <li class="active"><a href="http://localhost/work1/public/register">REGISTER</a></li>
           </ul>
        </div>
      <!--/.navbar-collapse -->
      </div>
    </div>
    <article class="container">
            <div class="page-header">
                <div class="col-md-6 col-md-offset-3">
                <h2>회원수정</h2>
                </div>
            </div>
            <div class="col-sm-6 col-md-offset-3">
                <form role="form" onSubmit="return check()" name='registerForm' action='update' method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name='id' value="{{$postData->id}}">
                    <div class="form-group">
                        <label for="inputName">아이디(이메일주소)</label>
                        <input type="text" class="form-control"  value='{{$postData->email}}' id="inputName" name='email' placeholder="아이디를 입력해 주세요">
                    </div>
                    <div class="form-group">
                        <label for="inputName">회원구분</label>
                        <select class="form-control" name="member"  >
                          <option value="">회원을 선택하세요</option>
                          <option value="정회원">정회원</option>
                          <option value="준회원">준회원</option>
                          <option value="학생회원">학생회원</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputName">이름(한국이름)</label>
                        <input type="text" class="form-control" id="inputName" name='kname' value='{{$postData->kname}}' placeholder="이름(한국이름)을 입력해 주세요">
                    </div>
                    <div class="form-group">
                        <label for="inputName">이름(영문이름)</label>
                        <input type="text" class="form-control" id="inputName" name='ename' value='{{$postData->ename}}'  placeholder="이름(영문이름)을 입력해 주세요">
                    </div>
                    <div class="form-group">
                        <label for="inputName">성별</label>
                        <select class="form-control" name="sex">
                          <option value="">성별을 선택하세요</option>
                          <option value="남">남</option>
                          <option value="여">여</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputName">직위</label>
                        <input type="text" class="form-control" value='{{$postData->spot}}'  id="inputName" name='spot' placeholder="직위를 입력해 주세요">
                    </div>
                    <div class="form-group">
                        <label for="inputName">근무처명</label>
                        <input type="text" class="form-control" id="inputName" value='{{$postData->position}}'  name='position' placeholder="회원님의 근무처를 입력해 주세요">
                    </div>
                    <div class="form-group">
                        <label for="inputName">연락처</label>
                        <input type="text" class="form-control" value='{{$postData->callNumber}}'  id="inputName" name='callNumber' placeholder="연락처를 입력해주세요('-' 제외)">
                    </div>
                    <div class="form-group text-center" style="width: 50%; float:left;">
                      <input type="submit" value="수정완료" class="btn btn-primary" style='float:right; margin:0 5px;'>
                    </div>
                  </form>
                  <div class="form-group text-center" style="width: 50%; float:left;">
                      <button class="btn btn-danger" style='float:left; margin:0 5px;' onclick="window.location.href='http://localhost/work1/public/detailPage?id={{$postData->id}}'">
                          취소하기<i class="fa fa-check spaceLeft"></i>
                      </button>
                  </div>

                  <script type="text/javascript">
                  function check() {
                    if(registerForm.email.value == "") {
                      alert("아이디를 입력해 주세요.");
                      registerForm.email.focus();
                      return false;
                    }
                    else if(registerForm.member.value == "") {
                      alert("회원을 선택해 주세요.");
                      registerForm.member.focus();
                      return false;
                    }
                    else if(registerForm.kname.value == "") {
                      alert("이름(한글이름)을 입력해 주세요.");
                      registerForm.kname.focus();
                      return false;
                    }
                    else if(registerForm.ename.value == "") {
                      alert("이름(영문이름)을 입력해 주세요.");
                      registerForm.ename.focus();
                      return false;
                    }
                    else if(registerForm.sex.value == "") {
                      alert("성별을 선택해 주세요.");
                      registerForm.sex.focus();
                      return false;
                    }
                    else if(registerForm.spot.value == "") {
                      alert("직위를 입력해 주세요.");
                      registerForm.spot.focus();
                      return false;
                    }
                    else if(registerForm.position.value == "") {
                      alert("근무처를 입력해 주세요.");
                      registerForm.position.focus();
                      return false;
                    }
                    else if(registerForm.callNumber.value == "") {
                      alert("연락처를 입력해 주세요.");
                      registerForm.callNumber.focus();
                      return false;
                    }
                    else{
                      return true;
                    }
                  }
                  </script>

        </article>
  </body>
</html>
