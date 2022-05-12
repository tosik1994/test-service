<footer class="footer padding-container">
    <div class="footer__box d-flex j-between">
        <div class="footer__logo">
            <img src="styles/img/ЭлектроДом%201.1.png" alt="" title="">
            <div class="logo-text text-center">© Электродом 2019</div>
        </div>
        <div class="">
            <div class="title">
                Контакты
            </div>
            <ul>
                @foreach($phones as $phone)
                    <li><a href="tel:{{$phone->phone}}">Phone: {{$phone->phone}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="">
            <div class="title">
                Где мы находимся
            </div>

            <ul>
                @foreach($main_positions as $main_position)
                    <li><span>{{$main_position->city}}, {{$main_position->street}}, {{$main_position->address}}</span></li>
                    <li><span>{{$main_position->hours_of_work}}, выходные: {{$main_position->weekend}}</span></li>
                @endforeach
            </ul>
        </div>
        <div class="">
            <div class="title">
                Где нас найти
            </div>
            <ul>
                @foreach($emails as $email)
                    <li><a href="mailto:{{$email->email}}">e-mail: {{$email->email}}</a></li>
                @endforeach

                <li class="d-flex social">
                    @foreach($social_networks as $social_network)
                        @foreach($social_network_types as $social_network_type)
                            @if($social_network->social_network_type_id == $social_network_type->id)
                                @if($social_network_type->name === "instagram")
                                    <a href="{{$social_network->url}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                             viewBox="0 0 15 15">

                                            <g id="Mask_Group_4" data-name="Mask Group 4"
                                               transform="translate(-814 -462)">
                                                <g id="facebook-logo_1_" data-name="facebook-logo (1)"
                                                   transform="translate(814 462)">
                                                    <path id="Path_4"
                                                          d="M11.249 0H9.3a3.416 3.416 0 0 0-3.6 3.692v1.7H3.751a.306.306 0 0 0-.306.306v2.468a.306.306 0 0 0 .306.306h1.956v6.223a.306.306 0 0 0 .306.305h2.551a.306.306 0 0 0 .306-.306V8.471h2.287a.306.306 0 0 0 .306-.306V5.7a.306.306 0 0 0-.306-.306H8.87V3.951c0-.693.165-1.046 1.069-1.046h1.31a.306.306 0 0 0 .306-.306V.309A.306.306 0 0 0 11.249 0z"
                                                          data-name="Path 4"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                @endif
                                @if($social_network_type->name === "facebook")
                                    <a href="{{$social_network->url}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                             viewBox="0 0 15 15">

                                            <g id="Mask_Group_3" data-name="Mask Group 3"
                                               transform="translate(-916 -718)">
                                                <g id="instagram-logo" transform="translate(916 718)">
                                                    <path id="Path_1"
                                                          d="M10.86 0H4.139A4.144 4.144 0 0 0 0 4.139v6.721A4.144 4.144 0 0 0 4.139 15h6.721A4.144 4.144 0 0 0 15 10.861V4.139A4.144 4.144 0 0 0 10.86 0zm2.809 10.861a2.812 2.812 0 0 1-2.809 2.809H4.139a2.812 2.812 0 0 1-2.808-2.809V4.139a2.812 2.812 0 0 1 2.808-2.808h6.721a2.812 2.812 0 0 1 2.809 2.809v6.721z"
                                                          data-name="Path 1"></path>
                                                    <path id="Path_2"
                                                          d="M7.5 3.635A3.865 3.865 0 1 0 11.365 7.5 3.869 3.869 0 0 0 7.5 3.635zm0 6.4A2.534 2.534 0 1 1 10.034 7.5 2.537 2.537 0 0 1 7.5 10.034z"
                                                          data-name="Path 2"></path>
                                                    <path id="Path_3"
                                                          d="M11.527 2.507a.975.975 0 1 0 .69.286.98.98 0 0 0-.69-.286z"
                                                          data-name="Path 3"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                @endif
                            @endif
                        @endforeach
                    @endforeach
                </li>
            </ul>
        </div>
    </div>
</footer>
