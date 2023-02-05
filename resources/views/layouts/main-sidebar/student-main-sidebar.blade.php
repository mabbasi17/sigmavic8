<div class="scrollbar side-menu-bg" style="overflow: scroll">
    <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
            <a href="{{ route('dashboard.Students') }}">
                <div class="pull-left"><i class="ti-home"></i><span
                        class="right-nav-text">{{trans('main_trans.Dashboard')}}</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{trans('main_trans.Programname')}} </li>


        <!-- الامتحانات-->
        <li>
            <a href="{{route('student_exams.index')}}"><i class="fas fa-book-open"></i><span
                    class="right-nav-text">الامتحانات</span></a>
        </li>

                <!-- الكورسات-->
                <li>
                    <a href="{{route('student_CoursesLessons.index')}}"><i class="fas fa-book-open"></i><span
                            class="right-nav-text">الكورسات</span></a>
                </li>

        {{-- <!-- الشرح والمراجعه (فيديوهات)-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#students-menu"><i class="fas fa-user-graduate"></i>الدروس<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
            <ul id="students-menu" class="collapse">
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#Student_information">الترم الاول<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                    <ul id="Student_information" class="collapse">
                        <li> <a href="{{route('Students.create')}}">الشرح</a></li>
                        <li> <a href="{{route('Students.index')}}">المراجعه</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#Students_upgrade">الترم الثاني<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                    <ul id="Students_upgrade" class="collapse">
                        <li> <a href="{{route('Promotion.index')}}">الشرح</a></li>
                        <li> <a href="{{route('Promotion.create')}}">المراجعه</a> </li>
                    </ul>
                </li>
            </ul>
        </li> --}}


        <!-- Settings-->
        <li>
            <a href="{{route('profile-student.index')}}"><i class="fas fa-id-card-alt"></i><span
                    class="right-nav-text">الملف الشخصي</span></a>
        </li>

    </ul>
</div>
