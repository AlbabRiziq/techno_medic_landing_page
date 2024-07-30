<nav class="flex items-center justify-between p-5 fixed text-[#16b3ac] bg-white w-screen z-50">
    <a href="<?= base_url() ?>">
        <div class="flex items-center gap-2">
            <img src='assets/img/logo.png' class="h-14" alt="">
            <h1 class="font-semibold">TECHNO MEDIC</h1>
        </div>
    </a>
    <div class="hidden lg:flex">
        <ul class="flex gap-5 ml-10">
            <li>
                <a href="<?= base_url() ?>">HOME</a>
            </li>
            <li>
                <a href="<?= base_url("lowongan") ?>">LOWONGAN</a>
            </li>
            <li>
                <a href="#">TENTANG KAMI</a>
            </li>
            <li>
                <a href="#">CLIENT</a>
            </li>
        </ul>
    </div>


    <div class="z-30">
        <label for="my-drawer-4" class="navbar-end lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                class="inline-block h-5 w-5 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </label>
    </div>

    <a href=""
        class="hidden lg:flex p-2 px-2 text-xs border-[#0891b2] rounded-full hover:bg-[#0891b2] hover:text-white transition-all border-2">HUBUNGI
        KAMI
    </a>
</nav>


<div class="drawer drawer-end z-[51]">
    <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
        <!-- Page content here -->
    </div>
    <div class="drawer-side">
        <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
            <!-- Sidebar content here -->
            <li>
                <a href="#">HOME</a>
            </li>
            <li>
                <a href="#">LOWONGAN</a>
            </li>
            <li>
                <a href="#">TENTANG KAMI</a>
            </li>
            <li>
                <a href="#">CLIENT</a>
            </li>
            <li>
                <a href="#"
                    class="p-2 px-2 text-xs border-[#0891b2] rounded-full hover:bg-[#0891b2] hover:text-white transition-all border-2">HUBUNGI
                    KAMI</a>
            </li>
        </ul>

    </div>
</div>