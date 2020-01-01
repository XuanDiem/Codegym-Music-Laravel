<?php

use App\Music;
use Illuminate\Database\Seeder;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $song = new Music();
        $song->name = 'Khúc Giao Mùa';
        $song->singer = 'Trung Quân Idol, Bảo Anh';
        $song->description = 'Cầm tay nhau bước trong...giao thừa Đón xuân, 
        đang về với tình yêu trái đất này Ta cùng bao người,
         nhìn nhau ánh mắt hân hoan Với bao niềm yêu thương cuộc đời 
         ĐK: Bên em bên em anh say trong hạnh phúc Đôi môi em anh ngỡ cánh đào Bên anh bên anh em nghe trong lòng hát 
         Những giai điệu tình yêu 
         Ta đi bên nhau đón xuân đang về tới Hồn hòa vào cùng với đất trời Xin nâng ly lên chúc nhau thêm hạnh phúc 
         Cuộc đời mãi thắm tươi *** 
         Đêm nay đêm nay ngàn năm sẽ qua Đêm nay ngàn năm mới về Dù hoa kia có phôi phai 
         Tình còn dài theo năm tháng Đêm nay đêm nay ngàn năm sẽ qua Xuân theo ngàn năm mới về 
         Dù qua bao tháng năm dài Tình người không phôi phai 
        (ĐK) Ta đi bên nhau đón xuân đang về tới Hồn hòa vào cùng với đất trời 
        Xin nâng ly lên chúc';
        $song->avatar = 'https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2Fkh%C3%BAc-giao-mua.jpg?alt=media&token=507d241d-d55e-4bb1-986a-d5102ac6a044';
        $song->musicUrl = 'https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2FKhucGiaoMua-TrungQuanIdolBaoAnh-4743530.mp3?alt=media&token=7c7916a5-b961-42ec-ab21-b4a86676158c';
        $song->save();


        $song = new Music();
        $song->name = 'Bánh Mỳ Không ?';
        $song->singer = 'Đạt G, Du Uyên';
        $song->description = 'Lời bài hát: Bánh Mì KhôngNhạc sĩ: Đạt G, Du Uyên.Khi mà không còn yêu thì
        Đêm nào ta cũng say vì
        Không còn ai gọi ta về
        Mau thật mau, đau thật đau

        Căn nhà ta cùng thuê ở
        Giờ đây đã có người thuê rồi
        Người ta nhìn thật hạnh phúc
        Bọn mình bơ vơ, thời mình ngu ngơ

        Em thì quá bận với những khoản lo
        Nhiều hôm ở công ty trễ lương
        Thì tối ăn bánh mì
        Bánh mì không, không có thịt luôn

        Tay cầm đơn cầu mong
        Anh có công việc mới
        Phụ em lúc khó khăn
        Những ngày tháng rất căng

        Nhớ xưa còn nói nếu lúc mình giàu
        Hai ta có nhà lầu
        Và thêm xe hơi có đủ tất cả màu
        Chiếc xe cùi bắp bể bánh ngoài đường

        Hai ta thấy bình thường
        Dù mồ hôi tuôn rơi
        Nhưng có nhau đời thêm vui
        Nhớ xưa mình thích những món lề đường

        Hủ tiếu gõ và mì gói nước sôi
        Thêm cái trứng gà
        Đến nay điều ước cũng đã thành thật
        Thành phố mỗi lúc càng chật

        Ta mất nhau, dễ gì gặp lại nhau
        Rối ren như trật tự giao thông đường phố
        Lạc nhau rồi, thôi đừng cố
        Đèn xanh, đèn đỏ rồi tới vàng

        Dừng hay là chạy
        Thì chuyện buồn ta vẫn mang
        Tiếng rao thân thuộc
        Của những quán *** xưa

        Mỗi lần nghe thấy
        Lòng như cắt, như cưa
        Nhiều tiền anh biết
        Bọn mình được ấm no

        Mà tiền nhiều như thế
        Nên tình cảm mình hóa tro
        Ta sợ mình đói nên lao vào kiếm ăn
        Rồi trái tim ta lạnh

        Lạnh hơn một phiến băng
        Ta vẫn chưa rõ
        Tại sao mình thay đổi
        Không ăn cùng nhau

        Nhiều công việc nên hay vội
        Có những bản nhạc
        Không nên hát cùng nhau
        Vì khi bài nhạc cất lên

        Thì cả hai người cùng đau
        Lúc nghèo rất vui
        Những năm tháng thăng trầm ấy
        Chứ không phải giống bây giờ

        Anh mặc vest còn em diện váy đâu
        Em thì quá bận với những khoản lo
        Nhiều hôm ở công ty trễ lương
        Thì tối ăn bánh mì

        Bánh mì không, không có thịt luôn
        Tay cầm đơn cầu mong
        Anh có công việc mới
        Phụ em lúc khó khăn

        Những ngày tháng rất căng
        Nhớ xưa còn nói nếu lúc mình giàu
        Hai ta có nhà lầu
        Và thêm xe hơi có đủ tất cả màu

        Chiếc xe cùi bắp bể bánh ngoài đường
        Hai ta thấy bình thường
        Dù mồ hôi tuôn rơi
        Nhưng có nhau đời thêm vui

        Nhớ xưa mình thích những món lề đường
        Hủ tiếu gõ và mì gói nước sôi
        Thêm cái trứng gà
        Đến nay điều ước cũng đã thành thật

        Thành phố mỗi lúc càng trật
        Ta mất nhau, câu chuyện cười thật đau
        Em thì quá bận với những khoản lo
        Nhiều hôm ở công ty trễ lương

        Thì tối ăn bánh mì
        Tay cầm đơn cầu mong
        Anh có công việc mới
        Phụ em lúc khó khăn
        Những ngày tháng rất căng';
        $song->avatar = 'https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2Fbanh-my-khong%20%3F.jpg?alt=media&token=6bc5c7c8-22b6-4d50-9f52-56a4f1b0d5c8';
        $song->musicUrl = 'https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2FThayToiYeuCoAyDinhLongRemix-ThanhHungIdolDJ-6054427.mp3?alt=media&token=c5bdfdce-dbbb-4306-95ab-9006c444d3aa';
        $song->save();

        $song = new Music();
        $song->name = 'Người Em Không Yêu';
        $song->singer = 'Quang Vinh';
        $song->description = 'Nơi con sông cô liêu ngày xưa Một giấc mơ tan theo mây bay từ đây Khi xưa ta yêu nhau 
        đắm say Rồi vỡ tan trôi theo dòng sông lãng quên Từng chiều đàn bồ câu tung cánh Khát khao bay hát ca với 
        đôi tình nhân Màu ánh nắng mơ hồ chôn vùi đi 
        kỉ niệm có nhau Hôm nay ta chia tay rồi mai Còn nhớ chi khi hai đôi ta gặp nhau 
        Em không yêu thì thôi cớ sao Lặng im mãi cho anh buồn đau xót xa Để lại một cuộc tình cay đắng
         Giấc chiêm bao nói lên những câu biệt ly Làm anh mãi mong chờ chờ hạnh phúc đôi ta gần nhau 
         Dù biết lúc trước anh mãi si mê Em nỡ tâm hững hờ (quay bước) Chờ cho con tim cay đắng u hoài Em bỗng nói xa rời 
         Anh như con thuyền trôi Lạc vào cuốn xoáy trong đêm xa xôi mịt mù 
        Chờ bão tố êm đềm Và anh quay trở về Tìm dấu vết năm xưa tàn tro';
        $song->avatar = 'https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2Fbanh-my-khong%20%3F.jpg?alt=media&token=36ac0583-b305-43fb-a633-1b2373277179';
        $song->musicUrl ='https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2FBanh-Mi-Khong-Htrol-Remix-ft-DatG-x-DuUyen-DatG-x-DuUyen.mp3?alt=media&token=5f830368-e4c2-4801-8b25-0e6804888086';
        $song->save();

        $song = new Music();
        $song->name = 'Hết Thương Cạn Nhớ';
        $song->singer = 'Đức Phúc';
        $song->description = 'LYRICS: Em àh anh đã biết Là tình yêu này chẳng cần thiết Em cần nơi bình yên Chứ không phải anh kế bên Em đừng giữ lại anh Khi trái tim vụn vỡ chưa lành Điều ban nãy anh vừa thấy là gì đây ?!
         Em đã vừa ghì hôn ai cận kề bên tai tựa đầu lên vai Thấy em đang đắm say chắc em chẳng hay đôi mình chưa chia tay Đôi khi tình yêu sẽ hoá nhạt nhoà khi vô tình một trong hai Cuốn lấy sai trái đến khi vỡ lỡ cả hai huỷ hoại tương lai
          Chẳng cần một ai nữa , bất kể ai cũng dư thừa Một mình đứng khóc giữa mưa , nén cơn đau vào từng hơi thở Một người mình chẳng ngưng nhớ Nhưng lại quay bước giả vờ Bảo rằng mình cũng như em ... 
        hết thương cạn nhớ Sự thật là chỉ mỗi em ... hết thương cạn nhớ !';
        $song->avatar = 'https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2Fhet-thuong-can-nho.jpg?alt=media&token=43ea0796-b5a4-4b33-888c-06cf4f12b141';
        $song->musicUrl = 'https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2FHet-Thuong-Can-Nho-Duc-Phuc.mp3?alt=media&token=1ceccf83-c13c-43ce-b14b-13f267e081d2';
        $song->save();

        $song = new Music();
        $song->name = 'Cô Thắm Không Về !';
        $song->singer = 'Phát Hồ, Jokes Bii, Thiện';
        $song->description = 'Từng là hơi ấm bên đời giờ là cơn gió ngang trời
         Mọi người xung quanh thay nhau cho tôi biết Cô Thắm không về nữa đâu Đặt trọn niềm tin sai người
          Giờ này ai khóc ai cười Thề hẹn làm chi Để rồi bỏ đi Tôi cố đem tình vun đắp mây hoá ngang trời che lấp Tôi vẫn nơi này đợi chờ cô về với tôi Là vì tôi quá ngốc nghếch Hay là do gia cảnh tôi nghèo Gốc đa chỉ còn mình tôi ngồi nhìn trăng lên Bao nhiêu kí ức một thời Giờ thành cay đắng một đời
           Nhà cao xe sang váy cưới lộng lẫy Sớm tối có người đón đưa Hình dung theo gió mây ngàn Ngồi ôm thương nhớ bẽ bàng Phận đời ngang trái Giờ biết nói cùng với ai Dẫu biết phận mình cay đắng Nhưng cớ sao lòng vẫn buồn Làm phu, làm thuê Làm sao mơ cho được ngọc ngà Cô Thắm ngày nào bên tôi Nay khuất xa dần mất rồi Đành thôi Tôi phải quên . .. 
          Rap: Tôi còn nhớ ngày cô đi Mưa lâm râm nặng hạt 
          Cô vội trao chiếc nhẫn cỏ Gương mặt cô lạnh nhạt Thề hẹn xưa nay còn đâu Khi tôi đã không còn cạnh cô Áo gấm lụa đào Cô cất bước đi giữa chốn phù phiếm nơi thành đô Cô Thắm ơi! Mỗi 1 ngày thiếu điều Tôi nhớ cô lắm Ánh đèn vàng Thành phố xa hoa đã cướp mất đi cô Thắm Túp lều tranh Nay chỉ lẻ bóng đơn điệu trong đó 1 trái tim 
          Chỉ biết đợi chờ cô về Trong nổi tuyệt vọng bóng ai dưới mái hiên Tui lau! Giọt nước mắt Sau còn động 2 hàng mi Đã bao lần Tui nắm lấy thứ tình cảm phai tàn đi Con sông xưa Mà vẫn khúc Bồi, giờ đây lòng người chỉ Lỡ Sao nỡ quên đi 
          Thứ ân tình xưa là cả 1 đời tui ghi nhớ Chờ cô về, chờ chiếc hôn Chờ 1 vòng tay ấm áp Chờ cô nói: “Cô nhớ tui“ chỉ là câu nói thấm thoát Câu hỏi đó, nợ tình duyên, liệu cô có trả lời? Cô bắt tui chờ Và chờ bao giờ hay tui phải chờ đến chờ đến cả đời  Từng là hơi ấm bên đời... Giờ là cơn gió ngang trời....
           Mọi người xung quanh thay nhau cho tôi biết Cô Thắm không về nữa đâu Đặt trọn niềm tin sai người Giờ này ai khóc ai cười... 
          Thề hẹn làm chi Để rồi bỏ đi  Bao nhiêu kí ức 1 thời Giờ thành cay đắng 1 đời Nhà cao xe sang Váy cưới lộng lẫy sớm tối có người đón đưa Hình dung theo gió mây ngàn Ngồi ôm thương nhớ bẻ bàng Phận đời ngang trái Giờ biết nói cùng với ai!  Rap: Một tiểu thư đài các Cô không còn là cô Thắm xưa Nơi đô thành tấp nập Cuộc sống cô giờ êm ấm chưa?
           Sao buồn vương trên mắt Sao đôi lần khóc ướt mi Tôi vẫn luôn dõi theo từ cái ngày cô bước đi Cô xa nơi mái chèo bến sông nhỏ ta thường qua Cô xa nơi đồng cỏ mái tranh nghèo cạnh vườn hoa Ánh trăng kia còn đợi Nhưng bóng người giờ nơi đâu Tôi chỉ biết mượn hơi men Tâm sự cùng trăng cho vơi sầu 
          Từng là hơi ấm bên đời giờ là cơn gió ngang trời Mọi người xung quanh thay nhau cho tôi biết Cô Thắm không về nữa đâu Đặt trọn niềm tin sai người Giờ này ai khóc ai cười Thề hẹn làm chi Để rồi bỏ đi Tôi cố đem tình vun đắp mây hoá ngang trời che lấp Tôi vẫn nơi này đợi chờ cô về với tôi Là vì tôi quá ngốc nghếch Hay là do gia cảnh tôi nghèo Gốc đa chỉ còn mình tôi ngồi nhìn trăng lên 
          Bao nhiêu kí ức một thời Giờ thành cay đắng một đời Nhà cao xe sang váy cưới lộng lẫy Sớm tối có người đón đưa Hình dung theo gió mây ngàn Ngồi ôm thương nhớ bẽ bàng Phận đời ngang trái Giờ biết nói cùng với ai Dẫu biết phận mình cay đắng Nhưng cớ sao lòng vẫn buồn Làm phu, làm thuê Làm sao mơ cho được ngọc ngà Cô Thắm ngày nào bên tôi Nay khuất xa dần mất rồi Đành thôi Tôi phải quên . .. 
           Rap: Tôi còn nhớ ngày cô đi Mưa lâm râm nặng hạt Cô vội trao chiếc nhẫn cỏ Gương mặt cô lạnh nhạt Thề hẹn xưa nay còn đâu Khi tôi đã không còn cạnh cô Áo gấm lụa đào Cô cất bước đi giữa chốn phù phiếm nơi thành đô Cô Thắm ơi! Mỗi 1 ngày thiếu điều Tôi nhớ cô lắm Ánh đèn vàng Thành phố xa hoa đã cướp mất đi cô Thắm Túp lều tranh Nay chỉ lẻ bóng đơn điệu trong đó 1 trái tim Chỉ biết đợi chờ cô về 
           Trong nổi tuyệt vọng bóng ai dưới mái hiên Tui lau! Giọt nước mắt Sau còn động 2 hàng mi Đã bao lần Tui nắm lấy thứ tình cảm phai tàn đi Con sông xưa Mà vẫn khúc Bồi, giờ đây lòng người chỉ Lỡ Sao nỡ quên đi Thứ ân tình xưa là cả 1 đời tui ghi nhớ Chờ cô về, chờ chiếc hôn Chờ 1 vòng tay ấm áp Chờ cô nói: “Cô nhớ tui“ chỉ là câu nói thấm thoát Câu hỏi đó, nợ tình duyên, liệu cô có trả lời?
            Cô bắt tui chờ Và chờ bao giờ hay tui phải chờ đến chờ đến cả đời  Từng là hơi ấm bên đời... Giờ là cơn gió ngang trời.... 
           Mọi người xung quanh thay nhau cho tôi biết Cô Thắm không về nữa đâu Đặt trọn niềm tin sai người Giờ này ai khóc ai cười... Thề hẹn làm chi Để rồi bỏ đi  Bao nhiêu kí ức 1 thời Giờ thành cay đắng 1 đời Nhà cao xe sang Váy cưới lộng lẫy sớm tối có người đón đưa Hình dung theo gió mây ngàn Ngồi ôm thương nhớ bẻ bàng Phận đời ngang trái Giờ biết nói cùng với ai! 
            Rap: Một tiểu thư đài các Cô không còn là cô Thắm xưa Nơi đô thành tấp nập Cuộc sống cô giờ êm ấm chưa? Sao buồn vương trên mắt Sao đôi lần khóc ướt mi Tôi vẫn luôn dõi theo từ cái ngày cô bước đi Cô xa nơi mái chèo bến sông nhỏ ta thường qua Cô xa nơi đồng cỏ mái tranh nghèo cạnh vườn hoa Ánh trăng kia còn đợi 
        Nhưng bóng người giờ nơi đâu Tôi chỉ biết mượn hơi men Tâm sự cùng trăng cho vơi sầu';
        $song->avatar = 'https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2Fco-tham-khong-ve.jpg?alt=media&token=a69533c9-6e5b-423f-b400-84d5082ee911';
        $song->musicUrl = 'https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2FCoThamKhongVe-PhatHoJokesBiiThien-6067247.mp3?alt=media&token=ca63bb83-a8c9-4175-951e-02ec2d58e8cf';
        $song->save();
    }
}
