<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
function autoload82a4232eeccc9796b53342cf5a5ab83a($class) {
    static $classes = null;
    if ($classes === null) {
        $classes = array(
            'tuleap\\theme\\burningparrot\\burningparrottheme' => '/BurningParrotTheme.php',
            'tuleap\\theme\\burningparrot\\currentprojectnavbarinfopresenter' => '/CurrentProjectNavbarInfoPresenter.php',
            'tuleap\\theme\\burningparrot\\footerpresenter' => '/FooterPresenter.php',
            'tuleap\\theme\\burningparrot\\headerpresenter' => '/HeaderPresenter.php',
            'tuleap\\theme\\burningparrot\\headerpresenterbuilder' => '/HeaderPresenterBuilder.php',
            'tuleap\\theme\\burningparrot\\homepagepresenter' => '/HomePagePresenter.php',
            'tuleap\\theme\\burningparrot\\javascriptpresenter' => '/JavascriptPresenter.php',
            'tuleap\\theme\\burningparrot\\navbar\\dropdownmenuitem\\content\\links\\linkpresenter' => '/Navbar/DropdownMenuItem/Content/Links/LinkPresenter.php',
            'tuleap\\theme\\burningparrot\\navbar\\dropdownmenuitem\\content\\links\\linkpresentersbuilder' => '/Navbar/DropdownMenuItem/Content/Links/LinkPresentersBuilder.php',
            'tuleap\\theme\\burningparrot\\navbar\\dropdownmenuitem\\content\\links\\linkspresenter' => '/Navbar/DropdownMenuItem/Content/Links/LinksPresenter.php',
            'tuleap\\theme\\burningparrot\\navbar\\dropdownmenuitem\\content\\presenter' => '/Navbar/DropdownMenuItem/Content/Presenter.php',
            'tuleap\\theme\\burningparrot\\navbar\\dropdownmenuitem\\content\\projects\\projectpresenter' => '/Navbar/DropdownMenuItem/Content/Projects/ProjectPresenter.php',
            'tuleap\\theme\\burningparrot\\navbar\\dropdownmenuitem\\content\\projects\\projectpresentersbuilder' => '/Navbar/DropdownMenuItem/Content/Projects/ProjectPresentersBuilder.php',
            'tuleap\\theme\\burningparrot\\navbar\\dropdownmenuitem\\content\\projects\\projectspresenter' => '/Navbar/DropdownMenuItem/Content/Projects/ProjectsPresenter.php',
            'tuleap\\theme\\burningparrot\\navbar\\dropdownmenuitem\\presenter' => '/Navbar/DropdownMenuItem/Presenter.php',
            'tuleap\\theme\\burningparrot\\navbar\\globalnavpresenter' => '/Navbar/GlobalNavPresenter.php',
            'tuleap\\theme\\burningparrot\\navbar\\joincommunitypresenter' => '/Navbar/JoinCommunityPresenter.php',
            'tuleap\\theme\\burningparrot\\navbar\\menuitem\\logoutpresenter' => '/Navbar/MenuItem/LogoutPresenter.php',
            'tuleap\\theme\\burningparrot\\navbar\\menuitem\\presenter' => '/Navbar/MenuItem/Presenter.php',
            'tuleap\\theme\\burningparrot\\navbar\\presenter' => '/Navbar/Presenter.php',
            'tuleap\\theme\\burningparrot\\navbar\\presenterbuilder' => '/Navbar/PresenterBuilder.php',
            'tuleap\\theme\\burningparrot\\navbar\\searchpresenter' => '/Navbar/SearchPresenter.php',
            'tuleap\\theme\\burningparrot\\navbar\\usernavpresenter' => '/Navbar/UserNavPresenter.php',
            'tuleap\\theme\\burningparrot\\projectsidebarpresenter' => '/ProjectSidebarPresenter.php'
        );
    }
    $cn = strtolower($class);
    if (isset($classes[$cn])) {
        require dirname(__FILE__) . $classes[$cn];
    }
}
spl_autoload_register('autoload82a4232eeccc9796b53342cf5a5ab83a');
// @codeCoverageIgnoreEnd
