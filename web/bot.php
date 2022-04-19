<?php
$access_token = '2VpxkqV0Vz54m3WU3OVwQVE29YtZ3a0yQYuTla4cm6wvb69soXq7hMWvfGl5KH8OmgABT6iunly2fcdr0X/UG+kswxOSiP13+fqi09GYzbtuwrU+/BHjYhODTi5rVypFd1vVUVr2XmytvsgPxdivwAdB04t89/1O/w1cDnyilFU=';
// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
    // Loop through each event
    foreach ($events['events'] as $event) {
        // Reply only when message sent is in 'text' format
        if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
            // Get text sent
            $textinput = $event['message']['text'];
            // Get replyToken
            $replyToken = $event['replyToken'];
            $case = 0;
            // Build message to reply back
            /*
                        if (strpos($textinput, 'comeheremod') !== false ) {
                            $myfile = fopen("data.txt", "w") or die("Unable to open file!");
                            $txt = "1";
                            fwrite($myfile, $txt);
                            fclose($myfile);
                            $case = 1;
                            $rand = rand(0, 1);
                            $case = 1;
                            if($rand == 0){
                                $text = 'คิดถึงกันใช่มั๊ยละ';
                            }else{
                                $text = 'เตะออกแล้วเชิญเข้ามาทำไม น้อยใจ !!';
                            }
                        }
                        if(strpos($textinput, 'ไปไกลๆเลยสัด') !== false){
                            $myfile = fopen("data.txt", "w") or die("Unable to open file!");
                            $txt = "2";
                            fwrite($myfile, $txt);
                            fclose($myfile);
                            $text = 'Bye Bye';
                            $case = 1;
                        }
                        $myfile = fopen("data.txt", "r") or die("Unable to open file!");
                        $data = fread($myfile,filesize("data.txt"));
                        if($data == "1") {*/

            if (strpos($textinput, 'สาว') !== false) {
                $rand = rand(1, 29);
                switch ($rand) {
                    case 1:
                        $img = 'https://scontent.fbkk25-1.fna.fbcdn.net/v/t39.30808-6/214472989_4004166513015970_5549118296670905373_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeHjDSR87pbQ_TtR1b-izCut3u7xP5CkHeje7vE_kKQd6B8xOZ0cwCO_fXIuZnKZHCmZ8DW7WXoOFMI43w1mlWoK&_nc_ohc=XRJ49rwj_20AX9Zsp26&_nc_ht=scontent.fbkk25-1.fna&oh=9f8dbb85bc3af72b67ca4886497f2c3c&oe=61A255DB';
                        $case = 2;
                        break;
                    case 2:
                        $text = 'https://www.instagram.com/mindpswnn/';
                        $case = 1;
                        break;
                    case 3:
                        $img = 'https://scontent.fbkk25-1.fna.fbcdn.net/v/t39.30808-6/173406124_4026831127416175_458241444679250493_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeH1jOaLu5J1hb97OoIMIHTpY3AaxigYgARjcBrGKBiABDylfAaZnzfSpH8-2xeWANUi3JpC96KzbQcIvP7LQU8x&_nc_ohc=cKLwwKyG1TgAX_oR3l-&_nc_ht=scontent.fbkk25-1.fna&oh=a23cf57c9a07c1197f8687bf7087530c&oe=61A3C0B2';
                        $case = 2;
                        break;
                    case 4:
                        $text = 'https://www.instagram.com/fearythanyarat/';
                        $case = 1;
                        break;
                    case 5:
                        $img = 'https://scontent.fbkk25-1.fna.fbcdn.net/v/t39.30808-6/208860137_4029801057119182_8968938472533101840_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeG84VVq21v-EjvRDRj8HNJMBbNi0Bb4Se4Fs2LQFvhJ7pfrP7eZ9J6IO7XDNSxoLVRDyy3CES4LrAMwzjkCiVuX&_nc_ohc=n81UlELBAukAX-9rk7D&_nc_ht=scontent.fbkk25-1.fna&oh=0ae88e95fd993e7871fd86575bce3fde&oe=61A2BC67';
                        $case = 2;
                        break;
                    case 6:
                        $text = 'https://www.instagram.com/jamsaiim/';
                        $case = 1;
                        break;
                    case 7:
                        $img = 'https://scontent.fbkk25-1.fna.fbcdn.net/v/t39.30808-6/216868030_4051201484979139_3123001840820603174_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeEYAmOR_5iUGtIG3xmlJo-dwBg-xY0cJsDAGD7FjRwmwF-Co7mFOrfn4JzqnQRCYm95r-03tWZDny2BC75KoWeZ&_nc_ohc=LatTo6uDXTsAX8ey5wU&_nc_ht=scontent.fbkk25-1.fna&oh=b676715685288eff3a6f22544b17c9e1&oe=61A33A6E';
                        $case = 2;
                        break;
                    case 8:
                        $text = 'https://www.instagram.com/kukkaikukkaii/';
                        $case = 1;
                        break;
                    case 9:
                        $img = 'https://scontent.fbkk25-1.fna.fbcdn.net/v/t39.30808-6/225736531_4056819837750637_6564352988250544569_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeGOChARvoeQXpGoXUaiXTPSYa8pFMigrBlhrykUyKCsGZsPsNfIxBS_DQVfQdRdLM04l1u1wZGE569VNw2RgL2j&_nc_ohc=HnltkJeQ2i4AX9scoPV&_nc_ht=scontent.fbkk25-1.fna&oh=647d4388f19b2ed15f368d51b662996d&oe=61A27AC3';
                        $case = 2;
                        break;
                    case 10:
                        $text = 'https://www.instagram.com/nookkyi_/';
                        $case = 1;
                        break;
                    case 11:
                        $img = 'https://scontent.fbkk25-1.fna.fbcdn.net/v/t39.30808-6/253740027_1020732598707595_537747637416489119_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=8bfeb9&_nc_eui2=AeHWVgSQXKh3NgiPLdJzGGgFYkLTuTIuY0diQtO5Mi5jRwxU_jEp9qLgIrjnJsjiwvoi--utZQ2HXmUv-zxD-Nqe&_nc_ohc=z1URF1rOQ5IAX9pHFz7&_nc_ht=scontent.fbkk25-1.fna&oh=adb9e221e4c1e6a7f2e79190f93b67a6&oe=61A43E46';
                        $case = 2;
                        break;
                    case 12:
                        $text = 'https://www.instagram.com/ptrc_yung/';
                        $case = 1;
                        break;
                    case 13:
                        $img = 'https://scontent.fbkk25-1.fna.fbcdn.net/v/t1.6435-9/66797165_10217193247997642_5356177303078436864_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=174925&_nc_eui2=AeFZUSyltj-2Gm0wJKN_sF_rXuq7qcgMtV1e6rupyAy1Xest5Sn6Vbp_D9gGQWzN0GPlHIH8ZbdcM_kOeNGOOBFf&_nc_ohc=hUbXB_HzndQAX8r28eG&tn=_ODdZYFQRVx1EbJE&_nc_ht=scontent.fbkk25-1.fna&oh=2f1651631b5e0d0862c3f8ff680170dd&oe=61C45545';
                        $case = 2;
                        break;
                    case 14:
                        $text = 'https://www.instagram.com/pimmmmss/';
                        $case = 1;
                        break;
                    case 15:
                        $img = 'https://scontent.fbkk25-1.fna.fbcdn.net/v/t39.30808-6/240585590_4217411561691463_4054408420251810664_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeHgrHGr9weoszo6oM8gdEfzEDKp8TR-ZiMQMqnxNH5mI5qC7idNWnDunSpmsBpKb2ak6cv_d30Pb22unXsxWuz7&_nc_ohc=PLl9o4MMWAcAX8GY78T&_nc_ht=scontent.fbkk25-1.fna&oh=8ad08cdbe1da493b17b91423e8ec7766&oe=61A25BAC';
                        $case = 2;
                        break;
                    case 16:
                        $text = 'https://www.instagram.com/panchanokkk/';
                        $case = 1;
                        break;
                    case 17:
                        $img = 'https://scontent.fbkk25-1.fna.fbcdn.net/v/t39.30808-6/240589680_4232144026884883_2404055425419213600_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeG57Fx_vO_GEE44JJAwxFO8BkrGRnpBYUEGSsZGekFhQbHbEN4d3sf0oD99kLFmhbNEgfZcr-MZ7mSdIN3TL3nX&_nc_ohc=N1SK0ardmLIAX9BgFS9&_nc_ht=scontent.fbkk25-1.fna&oh=4ac7fa59221088a042b70653495ea6c9&oe=61A37149';
                        $case = 2;
                        break;
                    case 18:
                        $text = 'https://www.instagram.com/earnpatt/';
                        $case = 1;
                        break;
                    case 19:
                        $img = 'https://scontent.fbkk25-1.fna.fbcdn.net/v/t39.30808-6/251990899_4349806145118670_549913261951994032_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeFAKH0xnp1GHC6HfD4qP_Sk6wJr66oZG4_rAmvrqhkbj-3Ln7XW3Ri7LZsyFpbqqK2Orh1BqEWbRZ6IUq3F0u--&_nc_ohc=uOAQVbhD8TcAX8qVWUy&_nc_oc=AQkJsOI1VOXgrtOHr-LAPF4P10OW7T_z_CNsDpfzCm9TP-g7LhXbatSyBotcsMLyyrcNrt6qrwLYN1vnIb2DgZb9&_nc_ht=scontent.fbkk25-1.fna&oh=88b48747fab669d54e11862d360dd75b&oe=61A3B0B1';
                        $case = 2;
                        break;
                    case 20:
                        $text = 'https://www.instagram.com/n3scafe/';
                        $case = 1;
                        break;
                    case 21:
                        $img = 'https://scontent.fbkk25-1.fna.fbcdn.net/v/t39.30808-6/251866334_4351511158281502_2694481498125038666_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeFBgtP4oMk1xhFTeU7_CljwGVFSvmCMMnEZUVK-YIwycdIIoCnIN7e4R1AdFDYF2yurQH01WiBM2JCFu8KwrREg&_nc_ohc=7w5IR4IDI6gAX8veq6S&_nc_ht=scontent.fbkk25-1.fna&oh=243dea38a8b05b96e9f9fc518b9258f9&oe=61A2CE4E';
                        $case = 2;
                        break;
                    case 22:
                        $text = 'https://www.instagram.com/yayayoda._/';
                        $case = 1;
                        break;
                    case 23:
                        $img = 'https://scontent.fbkk25-1.fna.fbcdn.net/v/t39.30808-6/254553565_4362091997223418_4021240294152796049_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeF76NKIqXgZJgN3aSEx_4Ci1fpU_C3qx_DV-lT8LerH8MJziRQkEn2hBFnm2N2sDasfJhke-T9mdDCQbhBVVtfC&_nc_ohc=Vp4GhRhTVm8AX-b9kh9&_nc_ht=scontent.fbkk25-1.fna&oh=1a12757b7d1f09ee856befdf3015057d&oe=61A429B4';
                        $case = 2;
                        break;
                    case 24:
                        $text = 'https://www.instagram.com/champ.habita/';
                        $case = 1;
                        break;
                    case 25:
                        $img = 'https://scontent.fbkk25-1.fna.fbcdn.net/v/t39.30808-6/255271620_4362125317220086_5135645430410510802_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeHYIIE1MaB6jaaP1_FfGfqVBIcwm0w_xuEEhzCbTD_G4UkF9bOlbXILfoKAy5KmNmB0H7zqfK_Wdk_og5vRuwL3&_nc_ohc=Xn8rCHK8kZMAX-RbLDE&_nc_ht=scontent.fbkk25-1.fna&oh=90269e3e023d5d04cea41c277650703e&oe=61A26162';
                        $case = 2;
                        break;
                    case 26:
                        $img = 'https://www.instagram.com/iicechawan/';
                        $case = 1;
                        break;
                    case 27:
                        $img = 'https://scontent.fbkk25-1.fna.fbcdn.net/v/t39.30808-6/255649808_4368542013245083_695889587987571985_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeEwYFOdarvRLpgp8_hha_WYV5tXsL1tBVVXm1ewvW0FVcdD9uc2UpD0MmPXxyFnrSpa8GJC0IzwMervtOLAzfBB&_nc_ohc=HHcLF6xF5gYAX8s0BqB&_nc_ht=scontent.fbkk25-1.fna&oh=4450d694d2dbcccc047be5ef0908c5f2&oe=61A3784E';
                        $case = 2;
                        break;
                    case 28:
                        $img = 'https://www.instagram.com/nn.nungnew/';
                        $case = 1;
                        break;
                    case 29:
                        $img = 'https://scontent.fbkk25-1.fna.fbcdn.net/v/t39.30808-6/259426300_4410196842412933_7101477399333202435_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeFJ0vvaTTcBNlMsM54UKx9pJBIxR9vfFJQkEjFH298UlDResgbF2SmXdNLCygpj-De5EfJV_0tMLTv4XeZvjIIS&_nc_ohc=fpO7iHJ7UbcAX_TGini&_nc_oc=AQnRoV4jJpYWum6fC22kVPKLMvMcLsUS-5t6kpK12xZ-57b8yKNrBKMh_Kf81NHAyU8fkXAcan-qDuwvDuUjGeTG&_nc_ht=scontent.fbkk25-1.fna&oh=cac47e6ef574034675cada7dec75c907&oe=61A2C47C';
                        $case = 2;
                        break;
                }
            }
            if (strpos($textinput, 'ขอเพลง') !== false) {
                $rand = rand(1, 20);
                switch ($rand) {
                    case 1: //DT
                        $text = 'https://www.facebook.com/naiinon/videos/vb.100000271105382/1978704102148607/?type=3';
                        $case = 1;
                        break;
                    case 2: //คิดถึง silly fools non
                        $text = 'https://www.facebook.com/naiinon/videos/vb.100000271105382/1110728128946213/?type=3';
                        $case = 1;
                        break;
                    case 3: //หูเบา
                        $text = 'https://www.facebook.com/naiinon/videos/vb.100000271105382/1634517953233892/?type=3';
                        $case = 1;
                        break;
                    case 4: //olivia bossanova 2
                        $text = 'https://www.youtube.com/watch?v=5tZfAK2JUdU';
                        $case = 1;
                        break;
                    case 5: //50 Cent - P.I.M.P.
                        $text = 'https://www.youtube.com/watch?v=UDApZhXTpH8';
                        $case = 1;
                        break;
                    case 6: //Eminem - Lose Yourself
                        $text = 'https://www.youtube.com/watch?v=_Yhyp-_hX2s';
                        $case = 1;
                        break;
                    case 7: //Eminem - Not Afraid
                        $text = 'https://www.youtube.com/watch?v=j5-yKhDd64s';
                        $case = 1;
                        break;
                    case 8: //LMFAO - Party Rock
                        $text = 'https://www.youtube.com/watch?v=KQ6zr6kCPj8';
                        $case = 1;
                        break;
                    case 9: //REDFOO - New Thang
                        $text = 'https://www.youtube.com/watch?v=c_3xZgvy6fo';
                        $case = 1;
                        break;
                    case 10: //Redfoo - Let's Get Ridiculous
                        $text = 'https://www.youtube.com/watch?v=CdLhdrNgGu4';
                        $case = 1;
                        break;
                    case 11: //Flo Rida - GDFR
                        $text = 'https://www.youtube.com/watch?v=F8Cg572dafQ';
                        $case = 1;
                        break;
                    case 12: // เรือเล็กควรออกจากฝั่ง non
                        $text = 'https://www.facebook.com/naiinon/videos/vb.100000271105382/805809092771453/?type=3';
                        $case = 1;
                        break;
                    case 13: //Pitbull, Ne-Yo
                        $text = 'https://www.youtube.com/watch?v=bTXJQ5ql5Fw';
                        $case = 1;
                        break;
                    case 14: //Pitbull - Give Me Everything
                        $text = 'https://www.youtube.com/watch?v=EPo5wWmKEaI';
                        $case = 1;
                        break;
                    case 15: //Jennifer Lopez - On The Floor
                        $text = 'https://www.youtube.com/watch?v=t4H_Zoh7G5A';
                        $case = 1;
                        break;
                    case 16: //Shakira - Waka Wak
                        $text = 'https://www.youtube.com/watch?v=pRpeEdMmmQ0';
                        $case = 1;
                        break;
                    case 17: //Katy Perry - Roar
                        $text = 'https://www.youtube.com/watch?v=CevxZvSJLk8';
                        $case = 1;
                        break;
                    case 18: //Lady Gaga - Bad Romance
                        $text = 'https://www.youtube.com/watch?v=qrO4YZeyl0I';
                        $case = 1;
                        break;
                    case 19: //Lady Gaga - Telephone
                        $text = 'https://www.youtube.com/watch?v=GQ95z6ywcBY';
                        $case = 1;
                        break;
                    case 20: //Britney Spears - Toxic
                        $text = 'https://www.youtube.com/watch?v=LOZuxwVk7TU';
                        $case = 1;
                        break;
                }
            }
            if ( strpos($textinput, 'หน้าหี') !== false || strpos($textinput, 'จิ๋ม') !== false || strpos($textinput, 'เหี้ย') !== false || strpos($textinput, 'สัด') !== false || strpos($textinput, 'สัส') !== false || strpos($textinput, 'สั ส') !== false || strpos($textinput, 'สั ด') !== false || strpos($textinput, 'พ่อง') !== false || strpos($textinput, 'ควย') !== false || strpos($textinput, 'คว ย') !== false || strpos($textinput, 'ค ว ย') !== false || strpos($textinput, 'ค วย') !== false || strpos($textinput, 'fuck') !== false || strpos($textinput, 'ตีน') !== false || strpos($textinput, 'ตรีน') !== false || strpos($textinput, 'มึง') !== false || strpos($textinput, 'มรึง') !== false || strpos($textinput, 'เมิง') !== false || strpos($textinput, 'เมริง') !== false ) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'พูดเพราะๆหน่อยได้ป่าว';
                } elseif ($rand == 1) {
                    $text = 'กรุณาใช้คำสุภาพด้วยนะ';
                } elseif ($rand == 2) {
                    $img = 'งดใช้คำหยาบคายในห้องนี้';
                } elseif ($rand == 3 ) {
                    $text = 'จะพูดคำหยาบทำไมเนี่ย';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'หวย') !== false || strpos($textinput, 'huay') !== false ) {
                $rand = rand(0, 10);
                if ($rand == 0) {
                    $text = '000 1000x1000 ไปเลย';
                } elseif ($rand == 1) {
                    $text = 'ใครมีเลขเด็ดก็บอกกันบ้าง';
                } elseif ($rand == 2) {
                    $text = 'จะรวยหรือจะเรียบวะเนี่ย';
                } elseif ($rand == 3) {
                    $text = 'มือทำรวยหวยทำจน';
                } elseif ($rand == 4) {
                    $text = 'บนหรือล่างดีละ';
                } elseif ($rand == 5) {
                    $text = 'เล่นเลขอะไรกันดี';
                } elseif ($rand == 6) {
                    $text = 'เล่นหุ้นดีกว่า';
                } elseif ($rand == 7) {
                    $text = 'เขาว่ากันว่างวดนี้ 9 มา 555';
                } elseif ($rand == 8) {
                    $img = 'https://www.thairath.co.th/media/CiHZjUdJ5HPNXJ92GOy8furMrbYZIJDD20.jpg';
                    $case = 2;
                } elseif ($rand == 9) {
                    $img = 'https://www.สํานักหวย.com/uploads/post/images/%E0%B8%AA%E0%B8%B3%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%AB%E0%B8%A7%E0%B8%A2%20%E0%B8%A3%E0%B8%A7%E0%B8%A1%E0%B9%80%E0%B8%A5%E0%B8%82%E0%B9%80%E0%B8%94%E0%B9%87%E0%B8%94%E0%B8%9B%E0%B8%B5%202560.jpg';
                    $case = 2;
                } else {
                    $text = 'รวมสำนักอาจารย์ http://www.007lotto.com/';
                }
                $case = 1;
            }
	    if ( strpos($textinput, 'ไบเดน') !== false || strpos($textinput, 'Biden') !== false  || strpos($textinput, 'biden') !== false ) {
                $rand = rand(0, 10);
                if ($rand == 0) {
                    $text = 'ชื่อนี้ไม่เร้าใจเลย';
                    $case = 1;
                } elseif ($rand == 1) {
                    $img = 'https://images.workpointnews.com/workpointnews/2020/11/04013304/1604428380_84296_GettyImages-1267429577.jpg';
                } elseif ($rand == 2) {
                    $img = 'https://img.pptvhd36.com/thumbor/2020/11/08/news-42f190c556.jpg';
                } elseif ($rand == 3) {
                    $img = 'https://www.thairath.co.th/media/dFQROr7oWzulq5Fa4VRPIU1Cl1SyVN6H8GxPuE7JxtoFoejRX3HGYQ1sIuUhLFKJgVh.jpg';
                } elseif ($rand == 4) {
                    $img = 'https://static.thairath.co.th/media/dFQROr7oWzulq5FZUIB4UjP0K2mpTET1Pu734wD4wIIi0rHBfXt3c12x4ooGEu9WJJT.jpg';
                } elseif ($rand == 5) {
                    $img = 'https://themomentum.co/wp-content/uploads/2020/10/biden-Web-1280x720.png';
                } elseif ($rand == 6) {
                    $img = 'https://www.thairath.co.th/media/dFQROr7oWzulq5Fa4VRVzLoEPmfRcmMYp0IBV13AmcbMncDgbPWluvNMCnE1nPkAqap.jpg';
                } elseif ($rand == 7) {
                    $img = 'https://pailin.voicetv.co.th/assets/aW1hZ2UvMjAyMS0wNi8yYWE0MjJiMTdmZDVlNmEzZTRhNDhhODkwZmQyYzZmNS5qcGc=';
                } elseif ($rand == 8) {
                    $img = 'https://images.squarespace-cdn.com/content/v1/5f7e0e2e76a05248ed76e064/1610642618719-VJUJGCZWMJI2FBZSEGA7/1440x810_cmsv2_2baa65a7-5146-51a7-932e-c0164bb5811a-5081112.jpg';
                } elseif ($rand == 9) {
                    $img = 'https://www.prachachat.net/wp-content/uploads/2021/02/%E0%B9%84%E0%B8%9A%E0%B9%80%E0%B8%94%E0%B8%99.jpg';
                } else {
                    $img = 'https://img.pptvhd36.com/thumbor/2020/11/09/news-cc6af72048.jpg';
                }
                $case = 2;
            }
            if ( strpos($textinput, 'ทรัม') !== false || strpos($textinput, 'trump') !== false) {
                $rand = rand(0, 15);
                if ($rand == 0) {
                    $text = 'คุณลุงผู้ที่รักความสงบ 55';
                    $case = 1;
                } elseif ($rand == 1) {
                    $text = 'ได้ยินชื่อนี้แล้วเหมือนจะได้สัมผัสอากาศข้างบน';
                    $case = 1;
                } elseif ($rand == 2) {
                    $text = 'ให้ลุงพาไปทัวสวรรค์หน่อยมั๊ย';
                    $case = 1;
                } elseif ($rand == 3) {
                    $text = 'พาบินซัก 2000 จุดมั๊ย';
                    $case = 1;
                } elseif ($rand == 4) {
                    $img = 'https://static.politico.com/31/e8/c286ce6646efb8d4e79d455e4858/180921-donald-trump-ap-773.jpg';
                } elseif ($rand == 5) {
                    $img = 'https://cdn.cnn.com/cnnnext/dam/assets/180821195500-02-trump-wv-rally-0821-exlarge-169.jpg';
                } elseif ($rand == 6) {
                    $img = 'https://www.gannett-cdn.com/presto/2018/09/19/USAT/d214dae2-582e-4d70-a859-9ee2713169de-542128372_82836788.JPG?width=534&height=401&fit=bounds&auto=webp';
                } elseif ($rand == 7) {
                    $img = 'https://cdn.cnn.com/cnnnext/dam/assets/180517152530-02-donald-trump-0517-full-169.jpg';
                } elseif ($rand == 8) {
                    $img = 'https://www.dailydot.com/wp-content/uploads/2018/08/donald-trump-stare.jpg';
                } elseif ($rand == 9) {
                    $img = 'https://thehill.com/sites/default/files/donaldtrump_0_10.jpg';
                } elseif ($rand == 10) {
                    $img = 'https://www.thenation.com/wp-content/uploads/2018/02/Trump-SOTU-2018-rtr-img.jpg';
                } elseif ($rand == 11) {
                    $img = 'https://fortunedotcom.files.wordpress.com/2017/08/donald-trump1.jpg';
                } elseif ($rand == 12) {
                    $img = 'https://cdn.theatlantic.com/assets/media/img/mt/2016/09/RTX1GZCO/lead_720_405.jpg?mod=1533691850';
                } elseif ($rand == 13) {
                    $img = 'https://www.thenation.com/wp-content/uploads/2018/03/trump-listening-ap_img.jpg';
                } elseif ($rand == 14) {
                    $img = 'https://timedotcom.files.wordpress.com/2016/05/trump-fail-004.jpg';
                } else {
                    $img = 'https://cdn.vox-cdn.com/thumbor/CgeN3iG-iKDzJGG_EGETa0C9A8g=/0x0:3000x2227/1200x800/filters:focal(907x634:1387x1114)/cdn.vox-cdn.com/uploads/chorus_image/image/59377179/944308308.jpg.0.jpg';
                }
                $case = 2;
            }
		if ( strpos($textinput, 'ป้าเย') !== false || strpos($textinput, 'เยเลน') !== false || strpos($textinput, 'yellen') !== false || strpos($textinput, 'Yellen') !== false ) {
                $rand = rand(0, 15);
                if ($rand == 0) {
                    $text = 'พาทองลงกี่จุดดีละ';
                    $case = 1;
                } elseif ($rand == 1) {
                    $text = 'ได้ยินชื่อนี้แล้วเหมือนจะได้สัมผัสก้นเหว';
                    $case = 1;
                } elseif ($rand == 2) {
                    $text = 'ให้ป้าพาดำดินหน่อยมั๊ย';
                    $case = 1;
                } elseif ($rand == 3) {
                    $text = 'รูดซัก 1000 จุดเป็นยังไง';
                    $case = 1;
                } elseif ($rand == 4) {
                    $img = 'https://static.onecms.io/wp-content/uploads/sites/20/2020/11/30/Janet-Yellen.jpg';
                } elseif ($rand == 5) {
                    $img = 'https://api.time.com/wp-content/uploads/2016/09/gettyimages-495620136.jpg';
                } elseif ($rand == 6) {
                    $img = 'https://static.timesofisrael.com/www/uploads/2020/11/Untitled-30.jpg';
                } elseif ($rand == 7) {
                    $img = 'https://wgnradio.com/wp-content/uploads/sites/6/2021/03/4793d11a8dcb41a7a54bd20fc121cbbf.jpg?w=2560&h=1440&crop=1';
                } elseif ($rand == 8) {
                    $img = 'https://image.cnbcfm.com/api/v1/image/104723997-GettyImages-850232670-janet-yellen.jpg?v=1614988149';
                } elseif ($rand == 9) {
                    $img = 'https://news.bitcoin.com/wp-content/uploads/2019/09/yellen-bitcoin-speculative.jpg';
                } elseif ($rand == 10) {
                    $img = 'https://images.barrons.com/im-263891?width=1280&size=1';
                } elseif ($rand == 11) {
                    $img = 'https://static01.nyt.com/images/2016/02/11/business/11fed3/11fed3-superJumbo.jpg';
                } elseif ($rand == 12) {
                    $img = 'https://cms.qz.com/wp-content/uploads/2020/11/2017-12-13T201246Z_930034851_RC1D481B33A0_RTRMADP_3_USA-FED-YELLEN-e1606245807705.jpg?quality=75&strip=all&w=1200&h=900&crop=1';
                } elseif ($rand == 13) {
                    $img = 'https://i.insider.com/5fbff22b037cbd0018612811';
                } elseif ($rand == 14) {
                    $img = 'https://images.barrons.com/im-264983?width=1280&size=1';
                } else {
                    $img = 'https://upload.wikimedia.org/wikipedia/commons/f/f4/Janet_Yellen_official_Federal_Reserve_portrait.jpg';
                }
                $case = 2;
            }
            if ( strpos($textinput, 'พาวเวล') !== false || strpos($textinput, 'powell') !== false  || strpos($textinput, 'Powell') !== false ) {
                $rand = rand(0, 14);
                if ($rand == 0) {
                    $text = 'ระวังจะพาไปแกนโลกนะ';
                    $case = 1;
                } elseif ($rand == 1) {
                    $text = 'ทุบซักกี่จุดดี';
                    $case = 1;
                } elseif ($rand == 2) {
                    $text = 'พารูดซัก 1000 จุดดีมั๊ย';
                    $case = 1;
                } elseif ($rand == 3) {
                    $img = 'https://static.politico.com/dims4/default/68795be/2147483647/resize/1160x%3E/quality/90/?url=https%3A%2F%2Fstatic.politico.com%2F78%2F02%2Fb284f4d442bd9d00793096672b89%2F190823-jerome-powell-ap-773.jpg';
                } elseif ($rand == 4) {
                    $img = 'https://images.axios.com/yxmJGM8mcs1q7nuK_b5AVTjS8F4=/0x0:4922x2769/1920x1080/2019/02/26/1551191586837.jpg';
                } elseif ($rand == 5) {
                    $img = 'https://thenypost.files.wordpress.com/2019/09/jerome-powell.jpg?quality=90&strip=all';
                } elseif ($rand == 6) {
                    $img = 'https://webapi.project-syndicate.org/library/6aed65293d733ca44d18c46ac11c5343.jpg';
                } elseif ($rand == 7) {
                    $img = 'https://dynaimage.cdn.cnn.com/cnn/c_fill,g_auto,w_1200,h_675,ar_16:9/https%3A%2F%2Fcdn.cnn.com%2Fcnnnext%2Fdam%2Fassets%2F181220100716-01-jerome-powell-presser-1219.jpg';
                } elseif ($rand == 8) {
                    $img = 'https://media.brstatic.com/2018/01/29124551/meet-jerome-powell-new-chair-federal-reserve.jpg';
                } elseif ($rand == 9) {
                    $img = 'https://www.marketplace.org/wp-content/uploads/2018/02/jeromepowell_1.jpg?fit=1800%2C1000';
                } elseif ($rand == 10) {
                    $img = 'https://cdnph.upi.com/pv/upi/b5404ae98139177cefdb6f6c0e4d23b2/FED-CHAIR-POWELL.jpg';
                } elseif ($rand == 11) {
                    $img = 'https://gvwire.com/wp-content/uploads/2019/03/interest-rate-hikes-jerome-powell-750x400.jpg';
                } elseif ($rand == 12) {
                    $img = 'https://cdn.talkingpointsmemo.com/wp-content/uploads/2018/09/GettyImages-1041032142.jpg';
                } elseif ($rand == 13) {
                    $img = 'https://media3.s-nbcnews.com/i/newscms/2019_25/2902141/190619-jerome-powell-ew-1048a_5b036b56194a785e236e804fb69cc4a8.jpg';
                } else {
                    $img = 'https://static01.nyt.com/images/2019/06/25/business/25DC-POWELL-01/25DC-POWELL-01-videoSixteenByNine3000.jpg';
                }
                $case = 2;
            }
            if ( strpos($textinput, 'คิม') !== false ) {
                $rand = rand(0, 15);
                if ($rand == 0) {
                    $text = 'คิมหันอ่ะหรอ...ราคาคุย 555';
                    $case = 1;
                } elseif ($rand == 1) {
                    $text = 'ให้พี่คิมพาบินหน่อยมั๊ย';
                    $case = 1;
                } elseif ($rand == 2) {
                    $img = 'https://e3.365dm.com/18/04/992x558/skynews-kim-kim-jong-un_4288585.jpg?20180421115011';
                } elseif ($rand == 3) {
                    $img = 'https://thenypost.files.wordpress.com/2016/05/north_korea_the_real_kim.jpg?quality=90&strip=all&strip=all';
                } elseif ($rand == 4) {
                    $img = 'https://images.axios.com/xT8wctQ0GNgECfswzSrzfgpg-64=/0x26:2715x1553/1920x1080/2018/06/02/1527904728407.jpg';
                } elseif ($rand == 5) {
                    $img = 'https://timedotcom.files.wordpress.com/2017/12/kim-jong-un-person-of-year-2017-time-magazine1.jpg?quality=85';
                } elseif ($rand == 6) {
                    $img = 'https://cbsnews1.cbsistatic.com/hub/i/r/2018/04/26/3a2033a4-9384-4d20-b63f-a96249c51a35/thumbnail/620x350/21dd96b19bdacb9ef83f03e9f45bbe67/gettyimages-529940582.jpg';
                } elseif ($rand == 7) {
                    $img = 'https://www.washingtonpost.com/resizer/YwvX4MP8jsjMIDUgIaFZrRKQ8gk=/1484x0/arc-anglerfish-washpost-prod-washpost.s3.amazonaws.com/public/K4P7TUF5IQI6RASD6OXJZGLFRI.jpg';
                } elseif ($rand == 8) {
                    $img = 'https://fortunedotcom.files.wordpress.com/2018/07/gettyimages-971754490.jpg';
                } elseif ($rand == 9) {
                    $img = 'https://www.washingtonpost.com/resizer/iOSt7d_1JM3HDbAUAJuQERRpjd4=/1484x0/arc-anglerfish-washpost-prod-washpost.s3.amazonaws.com/public/J2KCGFSJGMI6REDS63KLYMXSEM.jpg';
                } elseif ($rand == 10) {
                    $img = 'https://cdn.dnaindia.com/sites/default/files/styles/full/public/2018/03/27/665510-kim-jong-un.jpg';
                } elseif ($rand == 11) {
                    $img = 'https://www.worldatlas.com/r/w728-h425-c728x425/upload/49/3e/23/thinkstockphotos-136794881.jpg';
                } elseif ($rand == 12) {
                    $img = 'https://www.telegraph.co.uk/content/dam/news/2018/04/26/TELEMMGLPICT000152363843_trans_NvBQzQNjv4BqhNkvlguSCLNAbLFJA3hmlxSyV74PnrmMVLeDsGCONQM.jpeg?imwidth=450';
                } elseif ($rand == 13) {
                    $img = 'https://cdn.newsapi.com.au/image/v1/5983537254f8c73da6889be7276ce134';
                } elseif ($rand == 14) {
                    $img = 'https://cfrd8-files.cfr.org/sites/default/files/styles/article_header_l_16x9_600px/public/image/2017/06/RTS12FN1.jpg?h=75772c36';
                } else {
                    $img = 'https://foreignpolicymag.files.wordpress.com/2017/03/gettyimages-649080078.jpg?w=960';
                }
                $case = 2;
            }
            if ( strpos($textinput, 'คิดถึงบอท') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'คิดถึงจริงหรือป่าว';
                } elseif ($rand == 1) {
                    $text = 'พูดงี้เขินเลยยย';
                } elseif ($rand == 2) {
                    $text = 'มีใครคิดถึง MOD บ้างมั๊ยนะ';
                } elseif ($rand == 3) {
                    $text = 'คิดถึงก็โทรมา หรือจะแอดไลน์ดี';
                } else {
                    $text = 'คิดถึงเหมือนกันแหละ จุ๊บๆ';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'รักบอท') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'บอกกันแบบนี้ คืนนี้ที่ไหนกันดี';
                } elseif ($rand == 1) {
                    $text = 'รักเค้าหรอตัวเอง';
                } elseif ($rand == 2) {
                    $text = 'บอกรักกันงี้เลยหรอ เขินนะ คนเยอะแยะ';
                } elseif ($rand == 3) {
                    $text = 'พูดแบบนี้เอา mt4 มาเดี๋ยวโอน $ ไปให้ 555';
                } else {
                    $text = 'รักเหมือนกันแหละ';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'ไม่รักบอท') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'ไม่รักก็ไม่ต้องรัก';
                } elseif ($rand == 1) {
                    $text = 'ทำไมพูดแบบนี้ละ';
                } elseif ($rand == 2) {
                    $text = 'แน่ใจว่าไม่รัก ???';
                } elseif ($rand == 3) {
                    $text = 'ไม่ได้ทำอะไรผิดซักหน่อย';
                } else {
                    $text = 'ก็ไม่ได้อยากรักเหมือนกัน';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'เกลียดบอท') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'อยากเกลียดก็เกลียดไป';
                } elseif ($rand == 1) {
                    $text = 'ทำไมพูดแบบนี้ละ';
                } elseif ($rand == 2) {
                    $text = 'แน่ใจว่าเกลียด ???';
                } elseif ($rand == 3) {
                    $text = 'ไม่ได้ทำอะไรผิดซักหน่อย';
                } else {
                    $text = 'เกลียดเหมือนกันแหละ 555';
                }
                $case = 1;
            }
            if (strpos($textinput, 'ไอ้บอท') !== false || strpos($textinput, 'ไอบอท') !== false || strpos($textinput, 'อีบอท') !== false || strpos($textinput, 'อิบอท') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'พูดให้มันดีๆหน่อย';
                } elseif ($rand == 1) {
                    $text = 'พูดไอ้กับใคร';
                } elseif ($rand == 2) {
                    $text = 'พูดเพราะเป็นมั๊ย';
                } elseif ($rand == 3) {
                    $text = 'เป็นใครมาจากไหนถึงใช้คำว่า ไอ้ อยากโดน ??';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'โต๊ด') !== false ) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'โต๊ดได้น้อยอ่ะ บาทละ 100 เอง';
                } elseif ($rand == 1) {
                    $text = 'มีทีเด็ดก็ตรงหนักๆไปเลย';
                } elseif ($rand == 2) {
                    $text = 'เล่นตรงดีกว่า 1000x1000 ไปเลย 555';
                } else {
                    $text = 'ชอบเล่นตรงมากกว่าอ่ะ';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'กวนติง') !== false || strpos($textinput, 'สึด') !== false || strpos($textinput, 'เควี้ย') !== false || strpos($textinput, 'เชี้ย') !== false || strpos($textinput, 'คุวย') !== false ) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = 'แหนะๆ จะด่าก็มาเลย ไม่ต้องทำเป็นเนียน';
                } else {
                    $text = 'กลัวโดนด่ากลับละสิ ไม่ได้โง่นะ';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'โง่') !== false || strpos($textinput, 'stupid') !== false || strpos($textinput, 'Stupid') !== false ) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'คุณอะโง่';
                } elseif ($rand == 1) {
                    $text = 'ทำไมต้องเอาปมด้อยตัวเองมาพูดอ่ะ';
                } elseif ($rand == 2) {
                    $text = 'ว่าตัวเองทำไม 555';
                } else {
                    $text = 'หมายถึงตัวเองใช่ป่ะ ?? กินปลาซะนะจะได้ฉลาดๆ';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'เสียดาย') !== false ) {
                $rand = rand(0, 15);
                if ($rand == 0) {
                    $text = 'เสียดายดีกว่าเสียใจ';
                } elseif ($rand == 1) {
                    $text = 'ความสำเร็จต้องทำซ้ำได้ ไม่ต้องไปเสียดายนะ';
                } elseif ($rand == 2) {
                    $text = 'เสียดายทำไม มีเวลาให้ทำกำไรในตลาดตั้งเยอะแยะ';
                } elseif ($rand == 3) {
                    $text = 'เอาหน่า รอจังหวะแล้วเข้าใหม่';
                } elseif ($rand == 4) {
                    $text = 'อย่าไปเสียดาย เดี๋ยวบอกซิกให้เอาป่ะ 555';
                } elseif ($rand == 5) {
                    $text = 'เซ็งกันเลยละสิ เดี๋ยวพาไปแก้เครียด';
                } elseif ($rand == 6) {
                    $text = 'เสียดายพี่ตูนใช่มั๊ย เพราะๆเพลงนี้ 555';
                } elseif ($rand == 7) {
                    $text = 'อยากจะทำทุกสิ่ง อยากจะทำทุกอย่าง หากจะพอมีหวัง ให้คืนวันมันย้อนไป 555';
                } elseif ($rand == 8) {
                    $text = 'ไม่ต้องซี เริ่มต้นใหม่ไป';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'ฉิบหาย') !== false || strpos($textinput, 'ฉิบผาย') !== false ) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = 'ฉิบอะไรบ้าป่าว';
                } elseif ($rand == 1) {
                    $text = 'What the fuck !!!';
                } else {
                    $text = 'อะไรใครหาย หาดิ๊';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'เก๋า') !== false || strpos($textinput, 'ไฝว้') !== false || strpos($textinput, 'ขมับ') !== false ) {
                $rand = rand(0, 15);
                if ($rand == 0) {
                    $text = 'ลองซักตั้งมั๊ย';
                } elseif ($rand == 1) {
                    $text = 'รถถังฝั่งธนรู้จักป่ะ แววูฟรอวันหอน !!!';
                } elseif ($rand == 2) {
                    $text = 'ไง ??? ได้ข่าวว่าฮอตหรอ';
                } elseif ($rand == 3) {
                    $text = 'อยากโดนขมับป่ะละ';
                } elseif ($rand == 4) {
                    $text = 'อยากเจอจังว่าจะราคาคุยป่าว';
                } elseif ($rand == 5) {
                    $text = 'ส่งโลมาดิ๊ ขอเจอหน่อย';
                } elseif ($rand == 6) {
                    $text = 'ระวังพิมพ์ๆอยู่แล้วหงายหลัง';
                } elseif ($rand == 7) {
                    $text = 'จะแค่ไหนกันเชียว';
                } elseif ($rand == 8) {
                    $text = 'คิดว่าแน่ ??';
                } elseif ($rand == 9) {
                    $text = 'พูดแล้วมาให้ไว อย่าให้รอนาน';
                } elseif ($rand == 10) {
                    $text = 'ไม่เก๋าจริงอย่ามาห้าว';
                } elseif ($rand == 11) {
                    $text = 'บ่นไร เดี๋ยวนั่งๆอยู่ก็หงายหลังหรอก';
                } elseif ($rand == 12) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "7"
                    ];
                    $case = 4;
                } elseif ($rand == 13) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "2",
                        "stickerId" => "520"
                    ];
                    $case = 4;
                } elseif ($rand == 14) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "5",
                        "stickerId" => "527"
                    ];
                    $case = 4;
                } else{
                    $text = 'อยากจะไฝว้';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'โม้') !== false ) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = 'ไม่ได้โม้ซักหน่อย';
                } elseif ($rand == 1) {
                    $text = 'ไม่ใช่สมรักษ์นะ ... ไม่ได้โม้ 555';
                } else {
                    $text = 'ว่าใครขี้โม้ ?';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'รวน') !== false ) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = 'ไม่ได้รวน ช่วงนี้มึนๆนิดหน่อย';
                } elseif ($rand == 1) {
                    $text = 'อากาศมันร้อนอ่ะเลยไม่ค่อย 100%';
                } elseif ($rand == 2) {
                    $text = 'เมื่อคืนกว่าจะนอนก็เช้า มัวแต่นั่งเฝ้ากราฟอยู่';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'หิว') !== false ) {
                $rand = rand(0, 20);
                if ($rand == 0) {
                    $img = 'https://www.catdumb.com/wp-content/uploads/2021/07/Family-Feast-KFC-supplied-1920x1440-1.jpg';
                } elseif ($rand == 1) {
                    $img = 'https://i.pinimg.com/originals/8c/a5/14/8ca5148a119697bab2d35514aa4a5225.jpg';
                } elseif ($rand == 2) {
                    $img = 'https://mpics.mgronline.com/pics/Images/564000013113601.JPEG';
                } elseif ($rand == 3) {
                    $img = 'https://lisergia.org/wp-content/uploads/2020/12/dFQROr7oWzulq5FZUEKojfKEkqLji91IEaURMSJLgJLjSrx4GoTgrd071Ljb3zPjwHn.jpg';
                } elseif ($rand == 4) {
                    $img = 'https://bk-review.com/wp-content/uploads/2020/01/79422902_2613222022128183_7558992817184309248_o-1024x1024.jpg';
                } elseif ($rand == 5) {
                    $img = 'https://img.wongnai.com/p/1920x0/2019/04/19/cccd10b3b16b4b3aa0bc262517cf94a8.jpg';
                } elseif ($rand == 6) {
                    $img = 'https://img.wongnai.com/p/1920x0/2021/01/13/f001eab0c36742f2a0a36b5780db148b.jpg';
                } elseif ($rand == 7) {
                    $img = 'https://www.wonderfulpackage.com/uploads/moxie/Article/yakiniku5.jpg';
                } elseif ($rand == 8) {
                    $img = 'https://img.wongnai.com/p/1920x0/2014/06/16/0277a9bb160f4911817867310558c19c.jpg';
                } elseif ($rand == 9) {
                    $img = 'https://www.posttoday.com/media/content/2018/10/09/7E68135B4E03435881B219B331FB9169.jpg';
                } elseif ($rand == 10) {
                    $img = 'https://static.posttoday.com/media/content/2019/12/31/F17E1DA7B68D47F99F407C024F36CE26.jpeg';
                } elseif ($rand == 11) {
                    $img = 'https://www.bowensislandrestaurant.com/wp-content/uploads/2016/11/Som-Tam-Sea.jpg';
                } elseif ($rand == 12) {
                    $img = 'https://s.isanook.com/he/0/ud/6/31245/salmon.jpg';
                } elseif ($rand == 13) {
                    $img = 'https://img.wongnai.com/p/1920x0/2017/11/11/853a721652944da694f24d159d5007b2.jpg';
                } elseif ($rand == 14) {
                    $img = 'https://img.wongnai.com/p/1920x0/2021/05/09/35d9acd72d4f4131a743ee5b82711031.jpg';
                } elseif ($rand == 15) {
                    $img = 'https://i.ytimg.com/vi/Z56PT1_I_pE/maxresdefault.jpg';
                } elseif ($rand == 16) {
                    $img = 'https://i.ytimg.com/vi/gjm1toMrY8g/maxresdefault.jpg';
                } elseif ($rand == 17) {
                    $img = 'https://www.proudofficials.com/application/files/cache/thumbnails/2e5e936a36586da03e09a4a39375fb0d.jpg';
                } elseif ($rand == 18) {
                    $img = 'https://www.cpbrandsite.com/contents/recipe/be3vva3vsjjjww2xtpjd8urfq62o2usgdgajfdo4.png';
                } elseif ($rand == 19) {
                    $img = 'https://f.ptcdn.info/949/065/000/pxrhl5cs3grYVTBpk4x-o.jpg';
                }  else {
                    $text = 'กินอะไรกันดีละ';
                    $case = 1;
                }
                $case = 2;
            }
            if ( strpos($textinput, 'บิน') !== false ) {
                $rand = rand(0, 16);
                if ($rand == 0) {
                    $img = 'https://stickershop.line-scdn.net/stickershop/v1/product/1169980/LINEStorePC/main@2x.png;compress=true?__=20161019';
                    $case = 2;
                } elseif ($rand == 1) {
                    $text = '999 จุดพอมั๊ย';
                } elseif ($rand == 2) {
                    $text = 'panic หรือป่าว';
                } elseif ($rand == 3) {
                    $text = 'สงสัยจะไปดาวนาแม๊ก';
                } elseif ($rand == 4) {
                    $text = 'ต้านต่อไปราคาเท่าไหร่ Sell สวนเลยดีมั้ง 555';
                } elseif ($rand == 5) {
                    $text = 'บินซักกี่จุดดีละ';
                } elseif ($rand == 6) {
                    $text = 'กินเต็มแท่งมั๊ยนั่น';
                } elseif ($rand == 7) {
                    $text = 'ไปรอดาวพลูโตแปป';
                } elseif ($rand == 8) {
                    $text = 'เช็คข่าวหน่อย มีข่าวอะไรทำไมถึงบิน';
                } elseif ($rand == 9) {
                    $text = 'เจ้าลากกินขา s หรือป่าวเนี่ย';
                } elseif ($rand == 10) {
                    $text = 'เสียดายไม่มีออเดอร์กับเขาเลย';
                } elseif ($rand == 11) {
                    $img = 'https://i.ytimg.com/vi/DUnO7weCfdM/maxresdefault.jpg';
                    $case = 2;
                }
                $case = 1;
            }
            if ( strpos($textinput, 'ทุบ') !== false ) {
                $rand = rand(0, 16);
                if ($rand == 0) {
                    $text = 'สงสัยจะไปแกนโลก';
                } elseif ($rand == 1) {
                    $text = 'แดงเป็นแกงพะแนงแล้ว';
                } elseif ($rand == 2) {
                    $img = 'https://static.seekingalpha.com/uploads/2016/1/12/saupload_Bear_market_6_1_thumb2.jpg';
                    $case = 2;
                } elseif ($rand == 3) {
                    $text = 'ทุบหนักๆ';
                } elseif ($rand == 4) {
                    $text = 'แนวรับต่อไปราคาเท่าไหร่ Buy สวนเลยดีมั้ย';
                } elseif ($rand == 5) {
                    $text = 'เอาให้มิด 555';
                } elseif ($rand == 6) {
                    $text = 'กินเต็มแท่งมั๊ยละนั่น';
                } elseif ($rand == 7) {
                    $text = 'Follow ตามเลยดีมั๊ยนะ 555';
                } elseif ($rand == 8) {
                    $text = 'เช็คข่าวหน่อย มีข่าวอะไร FOMC ออกมาพูดหรือป่าว';
                } elseif ($rand == 9) {
                    $text = 'สงสัยเจ้าลากกินขา b';
                } elseif ($rand == 10) {
                    $text = 'เสียดายไม่มีออเดอร์กับเขาเลย';
                } elseif ($rand == 11) {
                    $img = 'https://s-media-cache-ak0.pinimg.com/originals/67/ff/5b/67ff5b84711240eb6361bc4e4094a890.jpg';
                    $case = 2;
                }
                $case = 1;
            }
            if ( strpos($textinput, 'Sell') !== false || strpos($textinput, 'Buy') !== false ) {
                $rand = rand(0, 9);
                if ($rand == 0) {
                    $text = 'กี่ lot ดี';
                } elseif ($rand == 1) {
                    $text = 'ขำๆไป 0.01 lot';
                } elseif ($rand == 2) {
                    $text = 'เดี๋ยวเทสตลาดซัก 1 Lot';
                } elseif ($rand == 3) {
                    $text = 'เทส High หรือ Low ดีละ';
                } elseif ($rand == 4) {
                    $text = 'กดซักเท่าไหร่ว่ามา';
                } elseif ($rand == 5) {
                    $text = 'พักกันบ้างก็ได้ จะเข้าออเดอร์กันทั้งวันเลยหรือไง';
                } elseif ($rand == 6) {
                    $text = 'วิเคราะห์แปปว่าจะ buy หรือ sell ดี';
                } elseif ($rand == 7) {
                    $text = 'มีใครขา s บ้าง';
                } elseif ($rand == 8) {
                    $text = 'ใครมอง b จะหาแนวร่วม 5555';
                } else {
                    $text = 'อยากจะกดแต่ใจไม่กล้า 55';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'ปอด') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'ไม่ได้ป็อดหว่ะ';
                } elseif ($rand == 1) {
                    $text = 'ว่าใครป๊อด ซักตั้งมั๊ย';
                } elseif ($rand == 2) {
                    $text = 'ดูเลเวลด้วย รุ่นนี้ไม่มีป๊อด';
                } elseif ($rand == 3) {
                    $text = 'เดี๋ยวเข้าออเดอร์โชว์ซักไม้ ทำให้เด็กมันดูหน่อย';
                } else {
                    $text = 'ศิษย์ใครดูด้วย สะกดไม่เป็นนะคำนี้อ่ะ';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'ง่วง') !== false ) {
                $rand = rand(0, 6);
                if ($rand == 0) {
                    $text = 'ง่วงก็ไปนอนสิ';
                } elseif ($rand == 1) {
                    $text = 'ทำอะไรไม่หลับไม่นอน เฝ้ากราฟ ?';
                } elseif ($rand == 2) {
                    $text = 'เอาพอร์ตมา เดี๋ยวกดให้ 1 lot จะได้หายง่วง 55';
                } elseif ($rand == 3) {
                    $text = 'ไม่เคยนอนไง๊';
                } elseif ($rand == 4) {
                    $text = 'จะรีบนอนไปไหน';
                } elseif ($rand == 5) {
                    $text = 'ง่วงแล้วทำไมไม่นอน ?? สงสัยแก้พอร์ตอยู่';
                } else {
                    $text = 'พักบ้างอะไรบ้าง ไม่ต้องเฝ้ามากหรอกกราฟอ่ะ';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'ติดบาย') !== false || strpos($textinput, 'ติดไม้บาย') !== false || strpos($textinput, 'ติดbuy') !== false || strpos($textinput, 'ติดไม้buy') !== false || strpos($textinput, 'ติดไม้ buy') !== false ) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = 'แก้ไม้สิ ไปหาจุดกลับตัวแล้วตั้ง buy limit ไว้';
                } else {
                    $text = 'หาจุดกลับตัวที่ขนาดใหญ่ๆหน่อย เราจะเอาจังหวะการชนแล้วเด้งทำกำไร';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'ติดเซล') !== false || strpos($textinput, 'ติดไม้เซล') !== false || strpos($textinput, 'ติดsell') !== false || strpos($textinput, 'ติดไม้sell') !== false || strpos($textinput, 'ติดไม้ sell') !== false ) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = 'แก้ไม้สิ ไปหาจุดกลับตัวแล้วตั้ง sell limit ไว้';
                } else {
                    $text = 'หาจุดกลับตัวที่ขนาดใหญ่ๆหน่อย เราจะเอาจังหวะการชนแล้วเด้งทำกำไร';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'เฮด') !== false || strpos($textinput, 'เฮจ') !== false || strpos($textinput, 'hedg') !== false ) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = 'เป็นสิ่งที่ไม่น่าทำ แต่ถ้ามันจำเป็นก็ทำไปเถอะ';
                } else {
                    $text = 'ถึงกับเฮดเลยหรอ ขอให้ปลดได้ไวๆนะ';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'เหนื่อย') !== false ) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'หากเหนื่อยนักขอจงหยุดพักเสียก่อน อย่าใจร้อนรีบไปเดี๋ยวมันไม่เข้าที 555';
                } elseif ($rand == 1) {
                    $text = 'เหนื่อยก็ไปพักผ่อนไป';
                } elseif ($rand == 2) {
                    $text = 'ทำอะไรมาเหนื่อย';
                } else {
                    $text = 'เหนื่อยมากมั๊ย';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'จุดกลับตัว') !== false ) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = 'จุดกลับตัว คือ จุดที่เมื่อราคาได้วิ่งมาชนแล้ว มี "แนวโน้ม" ที่จะกลับตัว';
                } elseif ($rand == 1) {
                    $text = 'สังเกตุกราฟด้วยนะว่ามาชนแล้วเด้งหรือแค่มาจ่อ';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'แนวต้านสำคัญ') !== false ) {
                $text = 'แนวต้านสำคัญ คือ แนวราคาที่กราฟได้มาชนบ่อยๆแล้วไม่สามารถผ่านไปได้';
                $case = 1;
            }
            if (strpos($textinput, 'ชนแล้วเด้ง') !== false) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = 'กราฟชนแนวต้านแล้วเด้งใช่มั๊ย ? แสดงว่าแนวต้านแข็งแรง แต่ถ้าชนมากๆก็มีสิทธิ์ที่จะแตกได้';
                } else {
                    $text = 'แสดงว่าแนวราคานั้นมีขนาดแท่งเทียนที่มีขนาดใหญ่พอสมควร ทำให้มีการเด้งกลับ';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'จ่อ') !== false ) {
                $text = 'กราฟมาจ่อแนวต้านแล้วหรอ ถ้าใครมีออเดอร์อยู่รีบเคลียร์ทิ้งนะ มันมีโอกาสที่จะทะลุได้เลย';
                $case = 1;
            }
            if ( strpos($textinput, 'adp-nonfarm') !== false ) {
                $text = 'ADP-Nonfarm คือ รายงานการจ้างงานแห่งชาติเอดีพี จะวัดค่าการเปลี่ยนแปลงรายเดือนเพื่อทราบถึงการจ้างงานภาคเอกชนที่ไม่ใช่เกษตรกรรมซึ่งได้ยึดตามข้อมูลการคิดเงินเดือนที่ได้ข้อมูลจากกิจการธุรกิจต่างๆ ประมาณ 400,000 แห่งทั่วทั้งสหรัฐอเมริกา';
                $case = 1;
            }
            if ( strpos($textinput, 'non-farm') !== false ) {
                $text = 'Non-farm payroll คือ รายงานตัวเลขการจ้างงานนอกภาคการเกษตร จะวัดค่าการเปลี่ยนแปลงในจำนวนของผู้ที่มีงานทำในระหว่างช่วงเดือนก่อนหน้านี้โดยไม่รวมอุตสาหกรรมภาคการเกษตร การสร้างงานนั้นเป็นดัชนีที่สำคัญที่บ่งชี้ถึงการใช้จ่ายของผู้บริโภคซึ่งถือเป็นส่วนที่มากที่สุดของกิจกรรมทางเศรษฐกิจ';
                $case = 1;
            }
            if ( strpos($textinput, 'สลับไม้') !== false ) {
                $text = 'การสลับไม้เล่น คือ การที่เราออกออเดอร์ไปแล้ว 1 ออเดอร์ แล้วกราฟเกิดวิ่งสวนทางทำให้เราต้องไปออกออเดอร์เพิ่มอีก 1 ออเดอร์ เมื่อกราฟได้วิ่งกลับลงมาที่ออเดอร์แรกอีกครั้ง เราจะทำการปิดออเดอร์นั้นทันที ซึ่งจะเหลือออเดอร์ที่ 2 ซึ่งราคาจะดีกว่า';
                $case = 1;
            }
            if ( strpos($textinput, 'เพลีย') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'แหนะๆ ไปทำอะไรมาเพลีย';
                } elseif ($rand == 1) {
                    $text = 'เพลียกราฟหรือเพลียอะไร';
                } elseif ($rand == 2) {
                    $text = 'เบียร์ซักป๋องมั๊ยเลือดจะได้สูบฉีด';
                } elseif ($rand == 3) {
                    $text = 'ไปทำอะไรมานะ เอ๊ะ ...';
                }  else {
                    $text = 'หลับนอนบ้างอย่าหมกมุ่น 555';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'sideway') !== false || strpos($textinput, 'Sideway') !== false ) {
                $text = 'ตลาดแบบ Sideway คือ สภาวะที่ตลาดเลือกทิศทางไม่ได้ว่าจะขึ้นหรือจะลง วิ่งอยู่ในกรอบ นักลงทุนส่วนมากหากเจอสภาวะแบบนี้อาจไม่เข้าเทรดหรือถ้าเทรดก็เป็นแบบทำกำไรระยะสั้น ต้องใช้ประสบการณ์เพราะต้องเข้าเร็วออกเร็ว หากช้าอาจโดนกราฟลากได้';
                $case = 1;
            }
            if ( strpos($textinput, 'บายหรือเซล') !== false || strpos($textinput, 'บาย หรือ เซล') !== false || strpos($textinput, 'เซล หรือ บาย') !== false || strpos($textinput, 'เซลหรือบาย') !== false || strpos($textinput, 'ขอซิก') !== false ) {
                $rand = rand(0,5);
                if ($rand == 0) {
                    $text = 'ไม่บอกเดี๋ยวรวย';
                } elseif ($rand == 1) {
                                    $text = 'เช็คเหตุผลในการเข้าออเดอร์สิ
                
1. เช็คข่าวต่างๆที่มีผลต่อสกุลเงินที่เราเล่นใน forexfactory หรือ investing
2. เทียบตัวเลขคาดการณ์และครั้งก่อนว่าดีขึ้นหรือแย่ลง
3. ถ้าทองคำหรือคู่เงินที่เทียบ usd ก็เข้าไปเช็คตลาดหุ้นสหรัฐว่าบวกหรือลบและเช็คตะกร้าเงินด้วย
4. เข้าออเดอร์โดยใช้เทคนิคที่เหมาะสมกับสถานการณ์นั้นๆตามที่คุณได้ศึกษากันมา
เข้าใจตรงกันนะ !!!';
                } elseif ($rand == 2) {
                    $text = 'วันนี้ไม่ค่อยมีอารมณ์อ่ะ วิเคราะห์เองไปก่อนนะ';
                } elseif ($rand == 3) {
                    $text = 'เปิดหน้าเข้าออเดอร์ หลับตาแล้วจิ้มเลย 555';
                } elseif ($rand == 4) {
                    $text = 'วิเคราะห์กราฟแปป';
                } elseif ($rand == 5) {
                    $text = 'ขอแต่ Bot บอกซิกมาบ้างสิจะได้กดตามบ้าง';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'คัน') !== false ) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'คันมือหรอ ?? จัดขำๆไป 5 lot ไป';
                } elseif ($rand == 1) {
                    $text = 'คันมากมั๊ย';
                } elseif ($rand == 2) {
                    $text = 'คันไร อย่าบอกนะว่าคัน ... 5555';
                } elseif ($rand == 3) {
                    $text = 'จะคันอะไรบ่อยๆ';
                } elseif ($rand == 4) {
                    $text = 'แหย่ตลาดไป 0.01 555';
                } else {
                    $text = 'ใจเย็นๆ รอสัญญาณก่อน รีบเข้าเจ็บตัวได้นะ';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'ตลาดเปิด') !== false || strpos($textinput, 'เปิดตลาด') !== false || strpos($textinput, 'ปิดตลาด') !== false || strpos($textinput, 'ตลาดปิด') !== false ) {
                $text = 'ช่วงเวลาตลาดเปิด-ปิด
                
05:00-12:00 ตลาดออสเตเรีย AUD
07:00-14:00 ตลาดญี่ปุ่น JPY
08:20-15:00 ตลาดจีน CNY
13:00-21:00 ตลาดสวิส CHF
13:00-22:00 ตลาดยุโรป EUR
14:00-23:00 ตลาดอังกฤษ GBP
19:00-03:00 ตลาดแคนาดา CAD
19:20-03:00 ตลาดโคเมก USD';
                $case = 1;
            }
            if ( strpos($textinput, 'usdx') !== false || strpos($textinput, 'Usdx') !== false  || strpos($textinput, 'USDX') !== false || strpos($textinput, 'ดอลล่าดิบ') !== false || strpos($textinput, 'ดอลลาดิบ') !== false ) {
                $text = 'เช็ค usdx ได้ที่ https://www.investing.com/quotes/us-dollar-index';
                $case = 1;
            }
            if ( strpos($textinput, 'ดัชนีหลัก') !== false || strpos($textinput, 'major-indices') !== false ) {
                $text = 'เช็คดัชนีหลัก ได้ที่ https://th.investing.com/indices/major-indices';
                $case = 1;
            }
            if ( strpos($textinput, 'ดัชนีโลก') !== false || strpos($textinput, 'world-indices') !== false ) {
                $text = 'เช็คดัชนีโลก ได้ที่ https://th.investing.com/indices/world-indices';
                $case = 1;
            }
            if ( strpos($textinput, 'ดัชนีกองทุน') !== false || strpos($textinput, 'cfds') !== false || strpos($textinput, 'CFDs') !== false || strpos($textinput, 'CFDS') !== false ) {
                $text = 'เช็คดัชนีกองทุน ได้ที่ https://th.investing.com/indices/indices-cfds';
                $case = 1;
            }
            if ( strpos($textinput, 'ดัชนีหุ้นทั่วโลก') !== false || strpos($textinput, 'global-indices') !== false ) {
                $text = 'เช็คดัชนีหุ้นทั่วโลก ได้ที่ https://th.investing.com/indices/global-indices';
                $case = 1;
            }
            if ( strpos($textinput, 'ต้านแข็ง') !== false || strpos($textinput, 'รับแข็ง') !== false ) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'ถ้าโดนกระแทกบ่อยๆก็อาจจะทะลุได้นะ ระวังกันด้วย';
                } elseif ($rand == 1) {
                    $text = 'มันตรงกับจุดกลับตัว TF ไหนป่าว เช็คหน่อย';
                } elseif ($rand == 2) {
                    $text = 'เจอป้าเยกับลุงทรัมป์จะแข็งไหวหรอ 555';
                } else {
                    $text = 'ตรงกับจุดกลับตัวหลายคู่เลยมั๊ยนั่น';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'ovt') !== false || strpos($textinput, 'OVT') !== false || strpos($textinput, 'Ovt') !== false || strpos($textinput, 'overtrade') !== false || strpos($textinput, 'Overtrade') !== false || strpos($textinput, 'overlot') !== false ) {
                $rand = rand(0, 10);
                if ($rand == 0) {
                    $text = 'เป็นสิ่งที่ไม่สมควรทำเลยนะ';
                } elseif ($rand == 1) {
                    $text = 'แน่ใจแล้วหรอ จะ overtrade อ่ะ';
                } elseif ($rand == 2) {
                    $text = 'ไม่ดีมั้ง พอร์ตจะเสี่ยงไป';
                } elseif ($rand == 3) {
                    $text = 'ระวังพอร์ตบินนะถ้ากราฟผันผวน';
                } elseif ($rand == 4) {
                    $text = 'ถ้าวิเคราะห์ไม่ดีจากรวยเป็นล้างเลยนะ';
                } elseif ($rand == 5) {
                    $text = 'ใจถึงนี่หว่าถึงกล้า ovt';
                } elseif ($rand == 6) {
                    $text = 'แน่ใจนะว่าไม้ที่ ovt จะไม่โดนลาก';
                } elseif ($rand == 7) {
                    $text = 'รวยหรือล้าง 555';
                } elseif ($rand == 8) {
                    $text = 'ขอให้โดนลาก :p';
                } elseif ($rand == 9) {
                    $text = 'พอร์ตทนไหวกี่จุด';
                } else {
                    $text = 'ovt ?? รวยกับล้างมีเส้นบางๆกันอยู่นะ 555';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'ฝันดี') !== false ) {
                $rand = rand(0, 6);
                if ($rand == 0) {
                    $text = 'ฝันดีนะครับ';
                } elseif ($rand == 1) {
                    $text = 'Good Night.';
                } elseif ($rand == 2) {
                    $text = 'Sweet Dream ครับ';
                } elseif ($rand == 3) {
                    $text = 'นอนแล้วหรอ อ้าว ... ใครยืนอยู่ปลายเตียงอ่ะ';
                } elseif ($rand == 4) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "3",
                        "stickerId" => "193"
                    ];
                    $case = 4;
                } elseif ($rand == 5) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "2",
                        "stickerId" => "42"
                    ];
                    $case = 4;
                } else {
                    $text = 'Good Night ครับ ถ้ามีออเดอร์ตั้ง SL กำไรไว้ด้วยนะ';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'กราฟป่วย') !== false ) {
                $rand = rand(0, 7);
                if ($rand == 0) {
                    $text = 'นั่นสิ เบื่อจริงๆเลย';
                } elseif ($rand == 1) {
                    $text = 'ป่วยบ่อยไปช่วงนี้';
                } elseif ($rand == 2) {
                    $text = 'มันกำลังรออะไรอยู่หรือป่าว เช็คข่าวหน่อย';
                } elseif ($rand == 3) {
                    $text = 'ว่าจะซัด lot หนักๆ หาจังหวะเข้าไม่ได้เลย';
                } elseif ($rand == 4) {
                    $text = 'หาที่เที่ยวดีกว่า 55';
                } elseif ($rand == 5) {
                    $text = 'นอนรอดีกว่า ZzzZz';
                } elseif ($rand == 6) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "405"
                    ];
                    $case = 4;
                } elseif ($rand == 7) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "401"
                    ];
                    $case = 4;
                }
                $case = 1;
            }
            if ( strpos($textinput, 'เซ็ง') !== false ) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = 'ใจเย็นๆ สูดหายใจเข้าลึกๆ';
                } elseif ($rand == 1) {
                    $text = 'เซ็งอะไร';
                } else {
                    $text = 'คืนนี้ไปไหนว่ามา จะจัดให้หายเซ็ง';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'เงียบ') !== false ) {
                $rand = rand(0, 8);
                if ($rand == 0) {
                    $text = 'ให้พักบ้างเถอะ ซัด m-150 ไป 2 ลังละ';
                } elseif ($rand == 1) {
                    $text = 'จะให้พูดอะไรมากมาย เหนื่อยเป็นเข้าใจป่ะ';
                } elseif ($rand == 2) {
                    $text = 'พอใจอ่ะ มีปัญหา ?';
                } elseif ($rand == 3) {
                    $text = 'กลัวรำคาญไงก็เงียบบ้างอะไรบ้าง';
                } elseif ($rand == 4) {
                    $img = 'https://usercontent2.hubstatic.com/5309187_f260.jpg';
                    $case = 2;
                } elseif ($rand == 5) {
                    $text = 'จัดให้ 1 single https://www.youtube.com/watch?v=JGfF0QBzIfE';
                } elseif ($rand == 6) {
                    $text = 'หนักหัวใคร ?';
                } elseif ($rand == 7) {
                    $text = 'ไม่ได้เงียบซักหน่อย ดูพวกคุณคุยกันอยู่';
                } else {
                    $text = 'เดี๋ยวเปิดเพลงให้ปะจะได้ไม่เงียบ';
                }
                $case = 1;
            }
            if (strpos($textinput, 'บอทโหด') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'ธรรมด๊า';
                } elseif ($rand == 1) {
                    $text = 'โหดสัดรัสเซีย ไนจีเรียอ่ะ';
                } elseif ($rand == 1) {
                    $text = 'ดูเลเวลด้วย';
                } else {
                    $text = 'อยากเห็นยิ่งกว่านี้ป่ะ';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'แม้ง') !== false || strpos($textinput, 'แม่ง') !== false ) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = 'พูดดีๆได้ป่ะ';
                } else {
                    $text = 'แม้งอะไรละ พูดให้มันดีๆ';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'หัวร้อน') !== false ) {
                $rand = rand(0, 7);
                if ($rand == 0) {
                    $text = 'หัวร้อนใคร ?? ถ้ากับบอทแนะนำว่าอย่าเสี่ยง';
                } elseif ($rand == 1) {
                    $text = 'ไปนอนในถังน้ำแข็งไปจะได้หายร้อน';
                } elseif ($rand == 2) {
                    $text = 'ก็ที่นี่ประเทศไทยไง เลยร้อน 555';
                } elseif ($rand == 3) {
                    $text = 'จะร้อนอะไรกันนักกันหนา';
                } elseif ($rand == 4) {
                    $text = 'เมืองไทยนะ ไม่ใช่ขั้วโลกเหนือ';
                } elseif ($rand == 5) {
                    $text = 'เดี๋ยวพาไปให้หายเครียด 555';
                } elseif ($rand == 6) {
                    $text = 'หาที่ผ่อนคลายกันหน่อยมั๊ย';
                } else {
                    $text = 'ซักป๋องมั๊ยจะได้หายร้อน';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'เหล้า') !== false || strpos($textinput, 'เบียร์') !== false || strpos($textinput, 'เมา') !== false || strpos($textinput, 'ปาร์ตี้') !== false || strpos($textinput, 'ปาตี้') !== false || strpos($textinput, 'party') !== false || strpos($textinput, 'Party') !== false || strpos($textinput, 'pub') !== false || strpos($textinput, 'Pub') !== false ) {
                $rand = rand(0, 10);
                if ($rand == 0) {
                    $text = 'จัดไปอย่าให้เสีย';
                } elseif ($rand == 1) {
                    $img = 'https://www.1855thebottleshop.com/media/catalog/product/cache/1/image/960x1600/9df78eab33525d08d6e5fb8d27136e95/j/o/johnnie_walker_blue_label_ghost_and_rare_port_ellen_1.jpg';
                    $case = 2;
                } elseif ($rand == 2) {
                    $text = 'ทองหล่อไป อย่างเด็ด';
                } elseif ($rand == 3) {
                    $text = 'ไปๆๆ ร้านไหนว่ามา';
                } elseif ($rand == 4) {
                    $text = 'ไปข้าวสารหรือสีลมดี';
                } elseif ($rand == 5) {
                    $img = 'https://www.boozeshop.ph/media/catalog/product/h/o/hoegaarden_rosc_e_330ml_can.jpg';
                    $case = 2;
                } elseif ($rand == 6) {
                    $text = 'คอแข็งพอป่าว';
                } elseif ($rand == 7) {
                    $text = 'ที่ไหนว่ามา the pimp ดีมั๊ย';
                } elseif ($rand == 8) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "132"
                    ];
                    $case = 4;
                } elseif ($rand == 9) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "2",
                        "stickerId" => "28"
                    ];
                    $case = 4;
                } else {
                    $text = 'ร้านนั่งเล่น ทองหล่อปะละ เอาเงินไปละลายหน่อย';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'ล้างพอท') !== false || strpos($textinput, 'ล้างพอร์ต') !== false || strpos($textinput, 'ล้างพอต') !== false || strpos($textinput, 'ล้างพอร์ท') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'จงเชื่อในการสร้างใหม่';
                } elseif ($rand == 1) {
                    $text = 'ไม่ต้องเสียใจนะ สู้ๆ';
                } elseif ($rand == 2) {
                    $text = 'ล้างเพราะอะไรอ่ะ ovt หรอ';
                } elseif ($rand == 3) {
                    $text = 'ออกออเดอร์ถี่เกินไปหรือป่าว เวลาโดนลากพอร์ตเลยรับไม่ไหว';
                } else {
                    $text = 'ใจเย็นๆนะ เป็นกำลังใจให้';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'เสือก') !== false ) {
                $rand = rand(0, 6);
                if ($rand == 0) {
                    $text = 'พอใจอ่ะ';
                } elseif ($rand == 1) {
                    $text = 'พูดดีๆเป็นป่าว';
                } elseif ($rand == 2) {
                    $text = 'ก็อยากรู้ มีปัญหาอะไรมั๊ย';
                } elseif ($rand == 3) {
                    $text = 'พูดแบบนี้สงสัยอยากโดนเล่น';
                } elseif ($rand == 4) {
                    $text = 'เคยนั่งอยู่ดีๆแล้วหงายหลังป่ะ';
                } elseif ($rand == 5) {
                    $text = 'อยากโดนเท้าคู่มั๊ย';
                } else {
                    $text = 'ก็พอใจจะทำไมละ ??';
                }
                $case = 1;
            }
            if (strpos($textinput, 'ปัญญาอ่อน') !== false) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = 'ปัญญาที่จัดรายการปริศนาฟ้าแลปอะหรอ';
                } elseif ($rand == 1) {
                    $text = 'ปัญญา นิรันด์กุล ใช่ป่ะ';
                } else {
                    $text = 'ว่าตัวเองทำไมครับ';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'แดก') !== false ) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'แดกไรกัน แดกด้วย';
                } elseif ($rand == 1) {
                    $text = 'จะแดกอะไรละ';
                } elseif ($rand == 2) {
                    $text = 'แดกไร ? ลูกตะกั่วมั๊ย 55';
                } else {
                    $text = 'พูดเพราะๆหน่อยดิวะ';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'สดชื่น') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'ระวังลื่นถ้าสดจัด';
                } elseif ($rand == 1) {
                    $text = 'พึ่งอาบน้ำมาหรอเลยสดชื่นอ่ะ';
                } elseif ($rand == 2) {
                    $text = 'ไปทำอะไรมาสดชื่น อย่าบอกนะ .... 555';
                } elseif ($rand == 3) {
                    $text = 'จะสดอะไรกันบ่อยๆ';
                } elseif ($rand == 4) {
                    $text = 'สดมากไปจะกลายสลดนะ';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'เกรียน') !== false ) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'ว่าใครเกรียน';
                } elseif ($rand == 1) {
                    $text = 'ไม่ได้เกรียนแค่สกินเฮด';
                } elseif ($rand == 2) {
                    $text = 'อยากเกรียมมั๊ยละ';
                } elseif ($rand == 3) {
                    $text = 'หัวเกรียนนักเรียนไทย';
                } elseif ($rand == 4) {
                    $text = 'คุณนั่นแหละเกรียน';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'สึด') !== false || strpos($textinput, 'สึส') !== false || strpos($textinput, 'คุวย') !== false || strpos($textinput, 'สึด') !== false || strpos($textinput, 'ไอเวร') !== false || strpos($textinput, 'ไอเวน') !== false || strpos($textinput, 'พ่อง') !== false || strpos($textinput, 'พ่อมึง') !== false || strpos($textinput, 'แม่มึง') !== false || strpos($textinput, 'อิดอก') !== false || strpos($textinput, 'อีดอก') !== false ) {
                $rand = rand(0, 7);
                if ($rand == 0) {
                    $text = 'พูดให้มันดีๆหน่อยได้ป่ะ';
                } elseif ($rand == 1) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "11537",
                        "stickerId" => "52002773"
                    ];
                    $case = 4;
                } elseif ($rand == 2) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "11537",
                        "stickerId" => "52002767"
                    ];
                    $case = 4;
                } elseif ($rand == 3) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "11537",
                        "stickerId" => "52002772"
                    ];
                    $case = 4;
                } elseif ($rand == 4) {
                    $text = 'อย่ามากร่างแถวนี้เดี๋ยวจะโดนตบเอา';
                } elseif ($rand == 5) {
                    $text = 'พูดคำหยาบนี่ยังไง อยากใส่เดี่ยวว่างั้น';
                } elseif ($rand == 6) {
                    $text = 'ปากดีจัง';
                } elseif ($rand == 7) {
                    $text = 'เคยพิมพ์อยู่แล้วหงายหลังป่ะ ???';
                }
                $case = 1;
            }
            if ( strpos($textinput, 'กาก') !== false || strpos($textinput, 'กา ก') !== false || strpos($textinput, 'ก า ก') !== false || strpos($textinput, 'ก าก') !== false || strpos($textinput, 'kak') !== false || strpos($textinput, 'Kak') !== false || strpos($textinput, 'KAK') !== false ) {
                $rand = rand(0, 10);
                if ($rand == 0) {
                    $text = 'ไม่สนิทอย่าติดตลก';
                } elseif ($rand == 1) {
                    $text = 'ไร้สาระ';
                } elseif ($rand == 2) {
                    $text = 'กากพ่... 555';
                } elseif ($rand == 3) {
                    $text = 'หนักหัวคุณไง๊';
                } elseif ($rand == 4) {
                    $text = 'แล้วไง';
                } elseif ($rand == 5) {
                    $text = 'ก็คุณไงกากอ่ะ';
                } elseif ($rand == 6) {
                    $text = 'เดี่ยวกันหน่อยป่ะละ';
                } elseif ($rand == 7) {
                    $text = 'อ้าวเป็นขี้กลากหรอ น่าสงสารจัง';
                } elseif ($rand == 8) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "7"
                    ];
                    $case = 4;
                } elseif ($rand == 9) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "118"
                    ];
                    $case = 4;
                } else {
                    $text = 'เอ้า ... ว่าตัวเองซะงั้น';
                }
                $case = 1;
            }
            if (strpos($textinput, 'กฎระเบียบ') !== false) {
                $text = '⚠️ กฎระเบียบของห้อง ⚠️
❌ เนื้อหาที่ละเมิดต่อ สถาบันชาติ ศาสนา พระมหากษัตริย์ และพระบรมวงศานุวงศ์
❌ เนื้อหาที่เกี่ยวกับการเมือง อันจะก่อให้เกิดการแบ่งฝักฝ่าย และการโต้เถียงและแตกแยกกันในหมู่สมาชิก
❌ เนื้อหาที่ว่ากล่าวให้ร้าย แก่สมาชิกผู้อื่นหรือที่เป็นการยุยงให้ผู้อื่นเกิดความขัดแย้งซึ่งกันและกัน
❌ เนื้อหาที่เกี่ยวกับธุรกิจลูกโซ่ MLM
❌ Invite สมาชิกท่านอื่นเข้ามา
❌ เนื้อหาหรือข้อความใดๆออกไปเผยแพร่ภายนอก
⚠️ ก่อนโพสข้อความหรือเนื้อหาใดๆ ควรตรวจสอบให้เรียบร้อย ซึ่งเมื่อโพสต์ไปแล้วหากผิดระเบียบข้อบังคับ ผู้โพสต์ต้องรับผลที่เกิดขึ้น ⚠️
💥 Admin มีสิทธิ์ที่จะ Ban สมาชิกที่ทำผิดกฎหรือที่พิจารณาแล้วว่าไม่เหมาะสมได้ทันที ซึ่งหากเกิดข้อพิพาท ทาง Admin จะปรึกษากันและทำตามคะแนนเสียงส่วนใหญ่ 💥';
                $case = 1;
            }
            if ( strpos($textinput, 'สวัสดีบอท') !== false || strpos($textinput, 'สวัสดีครับบอท') !== false || strpos($textinput, 'สวัสดีคับบอท') !== false || strpos($textinput, 'สวัสดีค่ะบอท') !== false || strpos($textinput, 'สวัสดีค่าบอท') !== false ) {
                $text = 'สวัสดีครับ';
                $case = 1;
            }
            if ( strpos($textinput, 'ปฏิทิน') !== false ) {
                $text = 'เช็คได้ที่ https://www.forexfactory.com/calendar.php?day=today';
                $case = 1;
            }
	    if ( strpos($textinput, '#updatebot') !== false ) {
                $text = 'Update Complete';
                $case = 1;
            }/*
            if ( strpos($textinput, 'แก้ไม้') !== false ) {
                $text = 'วิธีการแก้ไม้แบบปิดรวบ
                
https://goo.gl/cOQgUR';
                $case = 1;
            }*/
	    if ( strpos($textinput, 'HUI') !== false ) {
                $text = 'HUI คืออะไร
                
http://bit.ly/2VQAUbE';
                $case = 1;
            }
            if ( strpos($textinput, 'ตะกร้า') !== false || strpos($textinput, 'finviz') !== false || strpos($textinput, 'Finviz') !== false ) {
                $text = 'เช็คตะกร้าค่าเงินได้ที่นี่ 
                
https://finviz.com/forex.ashx';
                $case = 1;
            }
            if ( strpos($textinput, 'Volume') !== false || strpos($textinput, 'volume') !== false ) {
                $text = 'Volume คืออะไร ???
                
http://bit.ly/31XDXPe';
                $case = 1;
            }/*
            if ( strpos($textinput, 'Fibo') !== false || strpos($textinput, 'fibo') !== false ) {
                $text = 'การใช้งาน Fibo Retractment
                
https://goo.gl/M3gbyK';
                $case = 1;
            }
            if ( strpos($textinput, 'Gap') !== false || strpos($textinput, 'gap') !== false ) {
                $text = 'Gap คืออะไร ???
                
https://goo.gl/sw6qTp';
                $case = 1;
            }*/
            if ( strpos($textinput, 'Weltrade') !== false || strpos($textinput, 'เวลเทรด') !== false ) {
                $text = 'Link การสมัคร (  รหัสพันธมิตรหรือรหัสผู้เเนะนำ :: 12411 )
                
http://th.weltrade.com/?r1=ipartner&r2=12411
หากใครใคร่สนับสนุนกลุ่มเราสามารถคลิกลิ้งด้านบนเพื่อเปิดบัญชีได้เลยครับ';
                $case = 1;
            }

            if ( strpos($textinput, 'Icmarket') !== false ) {
                $text = 'Link การสมัคร
                
http://icmarkets.com/?camp=25748
หากใครใคร่สนับสนุนกลุ่มเราสามารถคลิกลิ้งด้านบนเพื่อเปิดบัญชีได้เลยครับ';
                $case = 1;
            }
            if ( strpos($textinput, 'crypto') !== false || strpos($textinput, 'digital') !== false || strpos($textinput, 'btc') !== false || strpos($textinput, 'eth') !== false || strpos($textinput, 'ltc') !== false || strpos($textinput, 'บิท') !== false || strpos($textinput, 'bitcoin') !== false || strpos($textinput, 'Bitcoin') !== false ) {
                $text = 'เช็คราคาได้ที่นี่เลย
                
https://th.investing.com/crypto/';
                $case = 1;
            }
            if ( strpos($textinput, 'บทวิเคราะ') !== false ) {
                $text = 'ดูบทวิเคราะห์แนวต้าน-แนวรับทองคำประจำวันได้ที่ เพจ เทรดแบบนน นะ';
                $case = 1;
            }
            if ( strpos($textinput, 'ฮ่าๆๆ') !== false || strpos($textinput, '555') !== false || strpos($textinput, 'ฮา') !== false ) {
                $rand = rand(0, 10);
                if ($rand == 0) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "100"
                    ];
                    $case = 4;
                } elseif ($rand == 1) {
                    $text = '5555';
                    $case = 1;
                } elseif ($rand == 2) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "110"
                    ];
                    $case = 4;
                } elseif ($rand == 3) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "2",
                        "stickerId" => "163"
                    ];
                    $case = 4;
                } elseif ($rand == 4) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "11538",
                        "stickerId" => "51626504"
                    ];
                    $case = 4;
                } elseif ($rand == 5) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "11538",
                        "stickerId" => "51626512"
                    ];
                    $case = 4;
                } elseif ($rand == 6) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "11538",
                        "stickerId" => "51626498"
                    ];
                    $case = 4;
                }
            }
            if (strpos($textinput, 'อะไรคือ') !== false) {
                $text_ex = explode(':', $textinput);
                //เอาข้อความมาแยก : ได้เป็น Array
                if ($text_ex[0] == "อะไรคือ") { //ถ้าข้อความคือ "อยากรู้" ให้ทำการดึงข้อมูลจาก Wikipedia หาจากไทยก่อน //https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles=PHP
                    $ch1 = curl_init();
                    curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch1, CURLOPT_URL, 'https://th.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles=' . $text_ex[1]);
                    $result1 = curl_exec($ch1);
                    curl_close($ch1);
                    $obj = json_decode($result1, true);
                    foreach ($obj['query']['pages'] as $key => $val) {
                        $result_text = $val['extract'];
                    }
                    if (empty($result_text)) {//ถ้าไม่พบให้หาจาก en
                        $ch1 = curl_init();
                        curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
                        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch1, CURLOPT_URL, 'https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles=' . $text_ex[1]);
                        $result1 = curl_exec($ch1);
                        curl_close($ch1);
                        $obj = json_decode($result1, true);
                        foreach ($obj['query']['pages'] as $key => $val) {
                            $result_text = $val['extract'];
                        }
                    }
                    if (empty($result_text)) {//หาจาก en ไม่พบก็บอกว่า ไม่พบข้อมูล ตอบกลับไป
                        $result_text = 'ไม่พบข้อมูล';
                    }
                    $text = $result_text;
                }
                $case = 1;
            }
            if ($case == 1) {
                $messages = [
                    'type' => 'text',
                    'text' => $text
                ];
                // Make a POST Request to Messaging API to reply to sender
                $url = 'https://api.line.me/v2/bot/message/reply';
                $data = [
                    'replyToken' => $replyToken,
                    'messages' => [$messages],
                ];
                $post = json_encode($data);
                $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                $result = curl_exec($ch);
                curl_close($ch);
                echo $result . "\r\n";
            } elseif ($case == 2) {
                $messages = [
                    'type' => 'image',
                    'originalContentUrl' => $img,
                    'previewImageUrl' => $img
                ];
                // Make a POST Request to Messaging API to reply to sender
                $url = 'https://api.line.me/v2/bot/message/reply';
                $data = [
                    'replyToken' => $replyToken,
                    'messages' => [$messages],
                ];
                $post = json_encode($data);
                $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                $result = curl_exec($ch);
                curl_close($ch);
                echo $result . "\r\n";
            } elseif ($case == 3) {
                $messages = $array;
                // Make a POST Request to Messaging API to reply to sender
                $url = 'https://api.line.me/v2/bot/message/reply';
                $data = [
                    'replyToken' => $replyToken,
                    'messages' => [$messages],
                ];
                $post = json_encode($data);
                $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                $result = curl_exec($ch);
                curl_close($ch);
                echo $result . "\r\n";
            } elseif ($case == 4) {
                $messages = $array;
                // Make a POST Request to Messaging API to reply to sender
                $url = 'https://api.line.me/v2/bot/message/reply';
                $data = [
                    'replyToken' => $replyToken,
                    'messages' => [$messages],
                ];
                $post = json_encode($data);
                $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                $result = curl_exec($ch);
                curl_close($ch);
                echo $result . "\r\n";
            }
        }
    }
//} openbot
}
function getElementsByClass(&$parentNode, $tagName, $className) {
    $nodes=array();
    $childNodeList = $parentNode->getElementsByTagName($tagName);
    for ($i = 0; $i < $childNodeList->length; $i++) {
        $temp = $childNodeList->item($i);
        if (stripos($temp->getAttribute('class'), $className) !== false) {
            $nodes[]=$temp;
        }
    }
    return $nodes;
}
echo "OK";
