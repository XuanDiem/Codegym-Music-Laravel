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
        $song->name = 'Tết Là Tết';
        $song->singer = 'A Huy,Ngân Khánh';
        $song->description = 'Tết tết tết là tết là tết Tết vừa đến đây dưới máy hiên nhà 
        Tết tết tết là tết là tết Tết vừa ghé qua trong nhà dưới phố.  Tết tết tết là tết là tết 
        Cho người ở xa về đây sum vầy Tết tết tết là tết là tết Con cháu ông bà quây quần bên nhau. 
         [ĐK:] Cho bầy trẻ thơ cùng khoe áo mới Cho những người lớn lì xì trẻ con
         Tất cả mọi người hân hoan chúc nhau Chúc nhau một năm an lành yên vui.';
        $song->avatar = 'https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2Ftet.jpg?alt=media&token=a2af61a2-2103-4802-b1ad-25b2d6c72f43';
        $song->musicUrl = 'https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2FTetLaTet-AHuyOnBichHa-2933129.mp3?alt=media&token=a5f9296a-1a89-4361-b91b-09a2797f2797';
        $song->save();


        $song = new Music();
        $song->name = 'Thay Tôi Yêu Cô Ấy';
        $song->singer = 'Thanh Hưng';
        $song->description = 'Lyrics: Ngày hôm nay cô ấy chẳng quan tâm gì mấy
         Chỉ cần 1 người để yêu thương lúc này Ngày hôm nay cô ấy muốn đi để mua 1 bó hoa 
         Trang trí nơi đẹp nhất trong nhà Cô ấy hay buồn lúc mưa, thích nghe câu ca ngày xưa 
         Những lúc khi trời đông nhớ vòng tay ấm nồng và ôm cô ấy thật lâu 
         ĐK: Người ấy vì thương tôi chờ đợi tôi cũng lâu rồi Mà tình yêu cứ xa vời nên cô ấy ngưng đợi 
         Ngày ấy gần bên tôi 1 giây thôi cũng không rời
          Nhưng vì lo nghĩ cuộc đời nên mới cách xa thôi Người hãy dần thay tôi gọi cô ấy thức giấc và 
          Chờ cô ấy trước ngôi nhà đưa cô ấy la cà 
          Người yêu của tôi ơi hãy tha thứ cho anh Đã yêu em khi chẳng có chi trong cuộc sống!';
        $song->avatar = 'https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2Fthanh-hung.jpg?alt=media&token=61a6580b-9bcb-4771-baaa-57c99df16d4c';
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
        $song->avatar = 'https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2FQuang-Vinh.jpg?alt=media&token=58b87ec8-4e38-407a-a8e7-8788177ca2bf';
        $song->musicUrl ='https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2FNguoiEmKhongYeu-QuangVinh-2430593.mp3?alt=media&token=0c3c3ff8-ee14-4a40-9a07-e02f1873c4bc';
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
