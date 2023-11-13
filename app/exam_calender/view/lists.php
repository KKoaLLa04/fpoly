<?php
$dataExam = [];
if (!empty($data['exam_calen'])) {
    foreach ($data['exam_calen'] as $key => $item) {
        $dataExam[] = json_decode($item['name']);
    }
    $dataExam = array_values($dataExam);
}
echo '<pre>';
print_r($dataExam);
echo '</pre>';
?>
<article class="home_boxright_account_namemuc">
    <p>Kế hoạch thi</p>
</article>

<!-- Giao diện theo từng danh mục -->
</section>
</div>
<!-- Giao diện theo từng danh mục -->
<section class="home_boxcontent">
    <article class="home_boxright_boxbotom">
        <div class="title_boxright_botom">
            <h2>Danh sách ca thi hôm nay</h2>
        </div>
        <div class="table_boxright_botom">
            <table>
                <thead>
                    <tr>
                        <th><a href="">#</a></th>
                        <th><a href="">Ngày</a></th>
                        <th><a href="">Ca-Phòng</a></th>
                        <th><a href="">Môn</a></th>
                        <th><a href="">Lớp</a></th>
                        <th><a href="">Giám thị</a></th>
                        <th><a href="">Thời gian phát đề</a></th>
                        <th><a href=""></a></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><a href="">html</a></td>
                        <td><a href="">css</a></td>
                        <td><a href="">udpm</a></td>
                        <td><a href="">manh</a></td>
                        <td><a href="">cd fpt</a></td>
                        <td><a href="">php</a></td>
                        <td><a href="">java</a></td>
                        <td><a href="">js</a></td>
                    </tr>
                </tbody>

                <tr>
                    <td><a href="">html</a></td>
                    <td><a href="">css</a></td>
                    <td><a href="">udpm</a></td>
                    <td><a href="">manh</a></td>
                    <td><a href="">cd fpt</a></td>
                    <td><a href="">php</a></td>
                    <td><a href="">java</a></td>
                    <td><a href="">js</a></td>
                </tr>
                <tr>
                    <td><a href="">html</a></td>
                    <td><a href="">css</a></td>
                    <td><a href="">udpm</a></td>
                    <td><a href="">manh</a></td>
                    <td><a href="">cd fpt</a></td>
                    <td><a href="">php</a></td>
                    <td><a href="">java</a></td>
                    <td><a href="">js</a></td>
                </tr>
                <tr>
                    <td><a href="">html</a></td>
                    <td><a href="">css</a></td>
                    <td><a href="">udpm</a></td>
                    <td><a href="">manh</a></td>
                    <td><a href="">cd fpt</a></td>
                    <td><a href="">php</a></td>
                    <td><a href="">java</a></td>
                    <td><a href="">js</a></td>
                </tr>
                <tr>
                    <td><a href="">html</a></td>
                    <td><a href="">css</a></td>
                    <td><a href="">udpm</a></td>
                    <td><a href="">manh</a></td>
                    <td><a href="">cd fpt</a></td>
                    <td><a href="">php</a></td>
                    <td><a href="">java</a></td>
                    <td><a href="">js</a></td>
                </tr>
                <tr>
                    <td><a href="">html</a></td>
                    <td><a href="">css</a></td>
                    <td><a href="">udpm</a></td>
                    <td><a href="">manh</a></td>
                    <td><a href="">cd fpt</a></td>
                    <td><a href="">php</a></td>
                    <td><a href="">java</a></td>
                    <td><a href="">js</a></td>
                </tr>
                <tr>
                    <td><a href="">html</a></td>
                    <td><a href="">css</a></td>
                    <td><a href="">udpm</a></td>
                    <td><a href="">manh</a></td>
                    <td><a href="">cd fpt</a></td>
                    <td><a href="">php</a></td>
                    <td><a href="">java</a></td>
                    <td><a href="">js</a></td>
                </tr>

            </table>
        </div>
    </article>
</section>