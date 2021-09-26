<?php
if (!empty($_GET)) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}
switch ($page) {



    case 'index_en':
        $main_content = 'index_en';
        include 'layouten.php';
        break;

    case 'about_en':
        $main_content = 'about_en';
        include 'layouten.php';
        break;

    case 'contact_en':
        $main_content = 'contact_en';
        include 'layouten.php';
        break;


    case 'login_en':
        $main_content = 'login_en';
        include 'layouten.php';
        break;
    case 'nationality_en':
        $main_content = 'nationality_en';
        include 'layouten.php';
        break;

    case 'news-details_en':
        $main_content = 'news-details_en';
        include 'layouten.php';
        break;
    case 'services_en':
        $main_content = 'services_en';
        include 'layouten.php';
        break;




    case 'index':
        $main_content = 'index';
        include 'layout.php';
        break;
    case 'contact':
        $main_content = 'contact';
        include 'layout.php';
        break;
    case 'about':
        $main_content = 'about';
        include 'layout.php';
        break;
        case 'team':
        $main_content = 'team';
        include 'layout.php';
        break;

    case 'login':
        $main_content = 'login';
        include 'layout.php';
        break;
        case 'login2':
        $main_content = 'login2';
        include 'layout.php';
        break;
        case 'pay':
        $main_content = 'pay';
        include 'layout.php';
        break;
    case 'nationality':
        $main_content = 'nationality';
        include 'layout.php';
        break;
     case 'profile':
            $main_content = 'profile';
            include 'layout_admin.php';
            break;
            case 'stuff':
            $main_content = 'stuff';
            include 'layout_admin.php';
            break;
            case 'MyContracts':
            $main_content = 'MyContracts';
            include 'layout_admin.php';
            break;
            case 'PersonalInfo':
            $main_content = 'PersonalInfo';
            include 'layout_admin.php';
            break;
            case 'MyTickets':
            $main_content = 'MyTickets';
            include 'layout_admin.php';
            break;
            case 'MyPayments':
            $main_content = 'MyPayments';
            include 'layout_admin.php';
            break;
            case 'FamilyInfo':
            $main_content = 'FamilyInfo';
            include 'layout_admin.php';
            break;
            case 'Location':
            $main_content = 'Location';
            include 'layout_admin.php';
            break;
            case 'Location':
            $main_content = 'Location';
            include 'layout_admin.php';
            break;
    case 'EmploymentInfo':
        $main_content = 'EmploymentInfo';
        include 'layout_admin.php';
        break;
    case 'CustomerDelegation':
        $main_content = 'CustomerDelegation';
        include 'layout_admin.php';
        break;
    case 'BankInfo':
        $main_content = 'BankInfo';
        include 'layout_admin.php';
        break;
 case 'InviteFriends':
        $main_content = 'InviteFriends';
        include 'layout_admin.php';
        break;



    case 'services':
        $main_content = 'services';
        include 'layout.php';
        break;
        case 'PendingContracts':
        $main_content = 'PendingContracts';
        include 'layout_admin.php';
        break;
        case 'MyInvoices':
        $main_content = 'MyInvoices';
        include 'layout_admin.php';
        break;

    case 'news':
        $main_content = 'news';
        include 'layout.php';
        break;
    case 'news-details':
        $main_content = 'news-details';
        include 'layout.php';
        break;
        case 'terms':
        $main_content = 'terms';
        include 'layout.php';
        break;
        case 'faq':
        $main_content = 'faq';
        include 'layout.php';
        break;




}
?>