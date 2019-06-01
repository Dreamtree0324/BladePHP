@extends("layout/master")

@section('maincontent')
    <section id="slider"> <!-- 슬라이더 섹션 -->
        <div class="container">
            <div class="slider">
                <div class="slide-image active" style="background-image:url(/images/real.jpg)">
                    <div class="filter">

                    </div>
                    <h1>슬라이드 제목</h1>
                    <p>슬라이드의 내용을 여기에 표시</p>
                </div>

                <div class="slide-image" style="background-image:url(/images/real.jpg)">
                    <div class="filter">
                        
                    </div>
                    <h1>슬라이드 제목2</h1>
                    <p>슬라이드의 내용을 여기에 표시</p>
                </div>

                <div class="slide-image" style="background-image:url(/images/real.jpg)">
                    <div class="filter">
                        
                    </div>
                    <h1>슬라이드 제목3</h1>
                    <p>슬라이드의 내용을 여기에 표시</p>
                </div>
            </div>
            <div class="indicator">
                <ul>
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </section>

    <div class="container"> <!-- 에디터 픽 섹션 -->
        <section id="editorPick">
            에디터 픽 섹션
        </section>
    </div>
@endsection