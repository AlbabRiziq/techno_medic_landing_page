<footer class="footer footer-center bg-base-300 text-base-content p-4">
    <aside>
        <p>Copyright <span id="tahun"></span> All right reserved by PT. INDO TECHNO MEDIC</p>
    </aside>
</footer>

<script>
    const tahun = document.getElementById("tahun")

    const waktu = new Date();

    tahun.innerText = waktu.getFullYear();

</script>