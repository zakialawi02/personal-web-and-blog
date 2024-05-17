<center>
    <?php foreach ($notes as $pesan) : ?>
    <div class="msg-bubble">
        <div class="msg-info">
            <div class="msg-info-name">~ <?= $pesan->pesan_dari ?></div>
            <div class="msg-info-time"><?= date("d M Y h:i A", strtotime($pesan->created_at)) ?></div>
        </div>

        <div class="msg-text">
            <?= $pesan->pesan ?>
        </div>
    </div>
    <?php endforeach ?>
</center>
