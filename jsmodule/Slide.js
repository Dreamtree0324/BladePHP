import $ from 'jquery';

export default class Slide{
    constructor(){
        this.current = 0;
        this.sList = $(".slide-image"); // 슬라이드 이미지
        this.indiList = $(".indicator li"); //인디케이터 버튼

        this.indiList.each((idx, target) =>{
            $(target).data("idx", idx);
        });
        this.indiList.on("click",(e)=>{
            let idx = $(e.target).data("idx");
            this.indiList.removeClass("active");
            this.indiList.eq(idx).addClass("active");

            if(this.current == idx || this.sliding) return;
            this.sliding=true;

            if(this.current < idx){ //슬라이드 오른쪽 이동
                this.sList.eq(idx).css({"left":"100%"});
                this.sList.eq(this.current).animate({"left":"-100%"},1000,"swing");
                this.sList.eq(idx).animate({"left":"0%"},1000);
            }else{ //슬라이드 왼쪽 이동
                this.sList.eq(idx).css({"left":"-100%"});
                this.sList.eq(this.current).animate({"left":"100%"},1000, "swing");
                this.sList.eq(idx).animate({"left":"0%"},1000);
            }
            this.current = idx;
        });
    }

    slide(idx){

    }
}