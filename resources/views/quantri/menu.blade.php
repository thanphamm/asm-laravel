<div class="am-sideleft">
    <ul class="nav am-sideleft-tab">
        <li class="nav-item">
            <a href="#mainMenu" class="nav-link active"><i class="icon ion-ios-home-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
            <a href="#emailMenu" class="nav-link"><i class="icon ion-ios-email-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
            <a href="#chatMenu" class="nav-link"><i class="icon ion-ios-chatboxes-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
            <a href="#settingMenu" class="nav-link"><i class="icon ion-ios-gear-outline tx-24"></i></a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="mainMenu" class="tab-pane active">
            <ul class="nav am-sideleft-menu">
                <li class="nav-item">
                    <a href="index.html" class="nav-link active">
                        <i class="icon ion-ios-home-outline"></i>
                        <span>Dashboard</span>
                    </a>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="" class="nav-link with-sub">
                        <i class="icon ion-ios-gear-outline"></i>
                        <span>Thể Loại</span>
                    </a>
                    <ul class="nav-sub">
                        <li class="nav-item"><a href="{{ route('theloai.index') }}" class="nav-link">Danh sách thể
                                loại</a></li>
                        <li class="nav-item"><a href="{{ route('theloai.create') }}" class="nav-link">Thêm thể loại</a>
                        </li>
                    </ul>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="" class="nav-link with-sub">
                        <i class="icon ion-ios-filing-outline"></i>
                        <span>Loai Tin</span>
                    </a>
                    <ul class="nav-sub">
                        <li class="nav-item"><a href="{{ route('loaitin.index') }}" class="nav-link">Danh sách loại
                                tin</a></li>
                        <li class="nav-item"><a href="{{ route('loaitin.create') }}" class="nav-link">Thêm loại tin</a>
                        </li>
                    </ul>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="" class="nav-link with-sub">
                        <i class="icon ion-ios-analytics-outline"></i>
                        <span>Tin Tức</span>
                    </a>
                    <ul class="nav-sub">
                        <li class="nav-item"><a href="{{ route('tintuc.index') }}" class="nav-link">Danh sách tin
                                tức</a></li>
                        <li class="nav-item"><a href="{{ route('tintuc.create') }}" class="nav-link">Thêm tin tức</a>
                        </li>
                    </ul>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="" class="nav-link with-sub">
                        <i class="icon ion-ios-navigate-outline"></i>
                        <span>Ý Kiến</span>
                    </a>
                    <ul class="nav-sub">
                    <li class="nav-item"><a href="{{ route('ykien.index') }}" class="nav-link">Danh sách ý kiến</a></li>
                        <li class="nav-item"><a href="{{ route('ykien.create') }}" class="nav-link">Thêm ý kiến</a>
                        </li>
                    </ul>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="" class="nav-link with-sub">
                        <i class="icon ion-ios-list-outline"></i>
                        <span>Người Dùng</span>
                    </a>
                    <ul class="nav-sub">
                    <li class="nav-item"><a href="{{ route('users.index') }}" class="nav-link">Danh người dùng</a></li>
                        <li class="nav-item"><a href="{{ route('users.create') }}" class="nav-link">Thêm người dùng</a>
                        </li>
                    </ul>
                </li><!-- nav-item -->
                
            </ul>
        </div><!-- #mainMenu -->
        <div id="emailMenu" class="tab-pane">
            <div class="pd-x-20 pd-y-10">
                <a href="" class="btn btn-orange btn-block btn-compose">Soạn Email</a>
            </div>
            <ul class="nav am-sideleft-menu">
                <li class="nav-item">
                    <a href="page-inbox.html" class="nav-link">
                        <i class="icon ion-ios-filing-outline"></i>
                        <span>Hộp Thư Đến</span>
                    </a>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="page-inbox.html" class="nav-link">
                        <i class="icon ion-ios-filing-outline"></i>
                        <span>Dự Thảo</span>
                    </a>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="page-inbox.html" class="nav-link">
                        <i class="icon ion-ios-paperplane-outline"></i>
                        <span>Gửi</span>
                    </a>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="page-inbox.html" class="nav-link">
                        <i class="icon ion-ios-trash-outline"></i>
                        <span>Rác</span>
                    </a>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="page-inbox.html" class="nav-link">
                        <i class="icon ion-ios-filing-outline"></i>
                        <span>Spam</span>
                    </a>
                </li><!-- nav-item -->
            </ul>

            <label class="pd-x-20 tx-uppercase tx-11 mg-t-10 tx-orange mg-b-0 tx-medium">Thư Mục Của Tôi</label>
            <ul class="nav am-sideleft-menu">
                <li class="nav-item">
                    <a href="page-inbox.html" class="nav-link">
                        <i class="icon ion-ios-folder-outline"></i>
                        <span>Cập Nhật</span>
                    </a>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="page-inbox.html" class="nav-link">
                        <i class="icon ion-ios-folder-outline"></i>
                        <span>Xã Hội</span>
                    </a>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="page-inbox.html" class="nav-link">
                        <i class="icon ion-ios-folder-outline"></i>
                        <span>Chương Trình Khuyến Mãi</span>
                    </a>
                </li><!-- nav-item -->
            </ul>
        </div><!-- #emailMenu -->
        
        
    </div><!-- tab-content -->
</div><!-- am-sideleft -->