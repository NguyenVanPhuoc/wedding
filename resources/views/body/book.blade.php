<section id="rsvp" class="section-bg-color extra-padding-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2  col-xxl-6 offset-xxl-3">
                <div class="form-wrapper flowers neela-style">
                    <h1 class="section-title">Sổ Lưu Bút</h1>
                    <form id="frm-happy" action="{{ route('happy_book') }}" class="form validate-rsvp-form row" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="Tên của bạn*" class="form-control">
                            <div class="error-name"></div>
                        </div>

                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="E-mail" class="form-control">
                            <div class="error-email"></div>
                        </div>
                        <div>
                            <div class="textarea-emoji-picker">
                                <div class="vitualTextarea">
                                    <textarea id="content" rows='3' class="form-control" name="content" placeholder="Nhập lời chúc của bạn*"></textarea>
                                    <div class="textAreaIcons">
                                        <span class="show-autocomplete tooltip-custom" data-toggle="tooltip" data-placement="top" title="Lời chúc gợi ý">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
                                              <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a2 2 0 0 0-.453-.618A5.98 5.98 0 0 1 2 6m6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1"/>
                                            </svg>
                                        </span>
                                        <span class="hide-autocomplete tooltip-custom" style="display: none;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lightbulb-off" viewBox="0 0 16 16">
                                              <path fill-rule="evenodd" d="M2.23 4.35A6 6 0 0 0 2 6c0 1.691.7 3.22 1.826 4.31.203.196.359.4.453.619l.762 1.769A.5.5 0 0 0 5.5 13a.5.5 0 0 0 0 1 .5.5 0 0 0 0 1l.224.447a1 1 0 0 0 .894.553h2.764a1 1 0 0 0 .894-.553L10.5 15a.5.5 0 0 0 0-1 .5.5 0 0 0 0-1 .5.5 0 0 0 .288-.091L9.878 12H5.83l-.632-1.467a3 3 0 0 0-.676-.941 4.98 4.98 0 0 1-1.455-4.405zm1.588-2.653.708.707a5 5 0 0 1 7.07 7.07l.707.707a6 6 0 0 0-8.484-8.484zm-2.172-.051a.5.5 0 0 1 .708 0l12 12a.5.5 0 0 1-.708.708l-12-12a.5.5 0 0 1 0-.708"/>
                                            </svg>
                                        </span>
                                        <div class="wishes-autocomplete-content" style="display: none;">
                                            <input type="text" id="searchWishSuggestions" onkeyup="searchWishSuggestionsFunction()" placeholder="Tìm kiếm...">
                                            <ul id="wishSuggestions">
                                                <li><a class="showContent" href="#">Chúc mừng hạnh phúc! Chúc hai bạn trăm năm hạnh phúc!</a></li>
                                                <li><a class="showContent" href="#">Chúc mừng ngày trọng đại tới hai bạn. Hạnh phúc bền lâu và trọn vẹn nhé!</a></li>
                                                <li><a class="showContent" href="#">Chúc mừng hạnh phúc hai bạn. Chúc hai bạn bên nhau đầu bạc răng long, sớm có thiên thần nhỏ nhé!</a></li>
                                                <li><a class="showContent" href="#">Chúc hai bạn ngày vui hạnh phúc. Hãy yêu thương nhau thật nhiều và sống thật hạnh phúc nha!</a></li>
                                                <li><a class="showContent" href="#">Chúc hai bạn sớm có con đàn cháu đống, cửa nhà lúc nào cũng đầm ấm, yên vui nhé!</a></li>
                                                <li><a class="showContent" href="#">Thật vui vì cuối cùng ngày này cũng tới với bạn. Tôi thành tâm chúc hai bạn thật nhiều hạnh phúc và sống đời vui vẻ cùng nhau mãi mãi!</a></li>
                                                <li><a class="showContent" href="#">Một chương mới đã mở ra với hai bạn rồi. Tôi mong cuộc sống mới của cả hai sẽ tràn ngập hy vọng, hạnh phúc và niềm vui!</a></li>
                                                <li><a class="showContent" href="#">Chúc đôi trai tài gái sắc hạnh phúc trọn vẹn, luôn yêu thương nhau thật nhiều!</a></li>
                                                <li><a class="showContent" href="#">Chia vui cùng bạn trong ngày trọng đại này. Cầu mong cuộc sống sau này của 2 vợ chồng thật thuận hòa, may mắn, làm ăn phát tài nha.</a></li>
                                                <li><a class="showContent" href="#">Tôi mong tình yêu của hai bạn thật bền chặt, gắn bó để xây dựng tổ ấm yên bình, hạnh phúc!</a></li>
                                                <li><a class="showContent" href="#">Hai bạn của tôi chắc chắn sẽ có được nhiều hạnh phúc. Mong hai bạn có sức khỏe dồi dào, làm ăn phát đạt và sớm có cháu cho ông bà bồng bế nhé!</a></li>
                                                <li><a class="showContent" href="#">Gửi lời chúc mừng chân thành nhất tới bạn của tôi. Chúc hai bạn một cuộc sống thật tuyệt vời, hòa thuận, gắn bó son sắt, thủy chung, hạnh phúc lâu dài.</a></li>
                                                <li><a class="showContent" href="#">Nơi nào có yêu thương nơi đó chắc chắn hạnh phúc. Hai bạn đã tìm được nơi đủ đầy yêu thương rồi, hãy cùng nắm tay nhau đi hết cuộc đời nhé!</a></li>
                                                <li><a class="showContent" href="#">Khởi đầu một cuộc sống mới, nguyện ước cho bạn của tôi những ngày tháng hạnh phúc phía trước để cùng xây dựng tổ ấm với người bạn đời. Happy ending!</a></li>
                                                <li><a class="showContent" href="#">Mình tin rằng đây sẽ là khởi đầu cho những điều tốt đẹp sắp tới trong cuộc sống của hai bạn. Hãy yêu thương và cùng nhau vượt qua mọi khó khăn trong cuộc sống nhé.</a></li>
                                                <li><a class="showContent" href="#">Hôn nhân đánh dấu sự kết thúc một câu chuyện tình yêu và bắt đầu một trận đấu vật. Chúc bạn những điều tốt đẹp nhất.</a></li>
                                                <li><a class="showContent" href="#">Tôi sẽ nói cho bạn bí mật của một cuộc hôn nhân hạnh phúc. Đó vẫn là … một bí mật cho tất cả! Chúc bạn tất cả những điều tốt đẹp nhất của thời gian phía trước.</a></li>
                                                <li><a class="showContent" href="#">Hôn nhân thật đẹp. Cuối cùng bạn đã tìm thấy một người mà bạn bị làm phiền suốt cuộc đời.</a></li>
                                                <li><a class="showContent" href="#">Hai trở thành một: Một giường, một điều khiển từ xa, một phòng tắm! Xin chúc mừng đám cưới hai bạn.</a></li>
                                                <li><a class="showContent" href="#">Chúc đôi trai tài gái sắc nhà mình hạnh phúc vẹn tròn, cung hỷ cung hỷ!</a></li>
                                                <li><a class="showContent" href="#">Chúc mừng anh trai của em đã có người rước nhé. Em mong anh chị có cuộc sống vui vẻ, hạnh phúc phía trước, làm ăn phát tài phát lộc.</a></li>
                                                <li><a class="showContent" href="#">Anh chị là một cặp trời sinh, chắc chắn sau này sẽ rất hạnh phúc. Em chúc anh chị sức khỏe dồi dào, làm ăn phát đạt và sớm có thiên thần nhỏ cho vui cửa vui nhà.</a></li>
                                                <li><a class="showContent" href="#">Hôm nay là ngày vui của anh chị và cũng là ngày em rất hạnh phúc. Chúc anh chị mãi yêu thương nhau như bây giờ và đạt được mọi ước nguyện trong cuộc sống.</a></li>
                                                <li><a class="showContent" href="#">Chúc anh/chị/em trăm năm hạnh phúc, thuận vợ thuận chồng.</a></li>
                                                <li><a class="showContent" href="#">Hôm nay chú rể đẹp trai, cô dâu xinh gái. Chúc mừng ngày thành hôn hai bạn tôi!</a></li>
                                                <li><a class="showContent" href="#">Chúc mừng đôi bạn trẻ nhé! Mãi yêu thương nhau đến đầu bạc răng long bạn nha!</a></li>
                                                <li><a class="showContent" href="#">Thay mặt team (tên nhóm) chúc hai bạn ngày ngày ân ái, bên nhau trọn đời.</a></li>
                                                <li><a class="showContent" href="#">Happy wedding! Chúc hai bạn có cuộc sống mới ngập tràn tiếng cười và niềm vui, sớm có thiên thần nhỏ bồng bé!</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="center">
                            <button type="submit" class="btn btn-primary submit_form">Gửi lời chúc</button>
                        </div>
                    </form>
                    <div class="wish-box">
                        @foreach($contents as $key => $item)
                            <div class="wish-box-item">
                                <strong>{{ $item->name }}</strong>
                                <div class="content">{{ $item->content }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>