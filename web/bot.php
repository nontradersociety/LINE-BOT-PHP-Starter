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
            if (strpos($textinput, 'บอล') !== false) {
                $message = '
';
                $html = file_get_contents('http://livescore.siamsport.co.th/widget/fixtures_results/1204/1');
                /*** a new dom object ***/
                $dom = new domDocument;
                /*** load the html into the object ***/
                $dom->loadHTML($html);
                /*** discard white space ***/
                $dom->preserveWhiteSpace = false;
                /*** the table by its tag name ***/
                $tables = getElementsByClass($dom, 'div', 'scoreBox');
                /*** get all rows from the table ***/
//$rows = $tables->item(0)->getElementsByTagName('tr');
                /*** loop over the table rows ***/
                foreach ($tables as $key => $row) {
                    $div = $row->getElementsByTagName('div');
                    $message .= '----- ' . $div->item(0)->nodeValue . ' -----
';
                    foreach ($row->getElementsByTagName('tr') as $data) {
                        $message .= $data->nodeValue . '
';
                    }
                }
                $message = strip_tags($message);
                $text = $message;
                $case = 1;
            }
            if ( strpos($textinput, 'ถ่ายทอด') !== false ) {
                $message = '
';
                $html = file_get_contents('http://livescore.siamsport.co.th/widget/live_table');
                /*** a new dom object ***/
                $dom = new domDocument;
                /*** load the html into the object ***/
                $dom->loadHTML($html);
                /*** discard white space ***/
                $dom->preserveWhiteSpace = false;
                /*** the table by its tag name ***/
                $tables = $dom->getElementsByTagName('table');
                /*** get all rows from the table ***/
//$rows = $tables->item(0)->getElementsByTagName('tr');
                /*** loop over the table rows ***/
                foreach ($tables as $key => $row) {
                    if ($key >= 1) {
                        $cols = $row->getElementsByTagName('tr');
                        foreach ($cols as $key2 => $cols) {
                            $td = $cols->getElementsByTagName('td');
                            if ($key2 == 0) {
                            } elseif ($key2 == 1) {
                                $message .= '----- ' . $cols->nodeValue . ' -----
';
                            } else {
                                $message .= $td->item(0)->nodeValue . ' | ';
                                $message .= $td->item(1)->nodeValue . ' | ';
                                $message .= $td->item(2)->nodeValue . '
';
                            }
                        }
                    }
                }
                $message = strip_tags($message);
                $text = $message;
                $case = 1;
            }
            if (strpos($textinput, 'คะแนน') !== false) {
                $text = 'ดูเอาเอง -> http://livescore.siamsport.co.th/widget/standing/1204';
                $case = 1;
            }
            if (strpos($textinput, 'สาว') !== false) {
                $rand = rand(1, 29);
                switch ($rand) {
                    case 1:
                        $text = 'https://www.instagram.com/nookzii/';
                        $case = 1;
                        break;
                    case 2:
                        $text = 'https://www.instagram.com/bunny_ployfon/';
                        $case = 1;
                        break;
                    case 3:
                        $text = 'https://www.instagram.com/bamzilla/';
                        $case = 1;
                        break;
                    case 4:
                        $text = 'https://www.instagram.com/nannyy/';
                        $case = 1;
                        break;
                    case 5:
                        $text = 'https://www.instagram.com/alexz_sarocha/';
                        $case = 1;
                        break;
                    case 6:
                        $text = 'https://www.instagram.com/berryying/';
                        $case = 1;
                        break;
                    case 7:
                        $text = 'https://www.instagram.com/_nungnink_/';
                        $case = 1;
                        break;
                    case 8:
                        $text = 'https://www.instagram.com/beth_lookgade/';
                        $case = 1;
                        break;
                    case 9:
                        $text = 'https://www.instagram.com/elle_elin/';
                        $case = 1;
                        break;
                    case 10:
                        $text = 'https://www.instagram.com/fearythanyarat/';
                        $case = 1;
                        break;
                    case 11:
                        $text = 'https://www.instagram.com/bunny.fuengfah/';
                        $case = 1;
                        break;
                    case 12:
                        $text = 'https://www.instagram.com/n_kang_nung/';
                        $case = 1;
                        break;
                    case 13:
                        $text = 'https://www.instagram.com/dejarvu/';
                        $case = 1;
                        break;
                    case 14:
                        $text = 'https://www.instagram.com/wpearita/';
                        $case = 1;
                        break;
                    case 15:
                        $text = 'https://www.instagram.com/miikuskie/';
                        $case = 1;
                        break;
                    case 16:
                        $text = 'https://www.instagram.com/cutegirlthailand/';
                        $case = 1;
                        break;
                    case 17:
                        $text = 'https://www.instagram.com/jomjamspch/';
                        $case = 1;
                        break;
                    case 18:
                        $text = 'https://www.instagram.com/nuchcheeber/';
                        $case = 1;
                        break;
                    case 19:
                        $text = 'https://www.instagram.com/skykikijung/';
                        $case = 1;
                        break;
                    case 20:
                        $text = 'https://www.instagram.com/crystal_girls_/';
                        $case = 1;
                        break;
                    case 21:
                        $text = 'https://www.instagram.com/donutacm/';
                        $case = 1;
                        break;
                    case 22:
                        $text = 'https://www.instagram.com/jaaeynano/';
                        $case = 1;
                        break;
                    case 23:
                        $text = 'https://www.instagram.com/fhm_ohly/';
                        $case = 1;
                        break;
                    case 24:
                        $text = 'https://www.instagram.com/padpudd/';
                        $case = 1;
                        break;
                    case 25:
                        $text = 'https://www.instagram.com/fhm_tanya/';
                        $case = 1;
                        break;
                    case 26:
                        $img = 'https://media-spiceee.net/uploads/content/image/285575/large_13434888_1594338330896008_2444272835128941170_n.jpg';
                        $case = 2;
                        break;
                    case 27:
                        $img = 'https://scontent-frx5-1.cdninstagram.com/vp/4fff2d80391526e8ea2c238d219b3789/5D0DDD44/t51.2885-15/e35/39525728_326268768128891_7215001245700849664_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com&se=7&ig_cache_key=MTg1NjY0MjQzMDA0MDk0MTQ5OQ%3D%3D.2';
                        $case = 2;
                        break;
                    case 28:
                        $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/42908916_10212323747791287_3392551038832607232_n.jpg?_nc_cat=105&_nc_eui2=AeHYe7vjhBlS8VohzrJhtqwCN_i7z51xFnCqK1k1Th6Rn0L_p7Vney8JzVgzZXEbta254qgGlhQ434QuDYLMwMwWCXNPVju5Vx5PX3fMgyzPaA&_nc_ht=scontent.fbkk5-3.fna&oh=cf82bf7910f295661ff111f21c16c7f8&oe=5D450A80';
                        $case = 2;
                        break;
                    case 29:
                        $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/40057749_10212083560666759_5912096760108417024_n.jpg?_nc_cat=111&_nc_eui2=AeFq0jZcgMM_SA-pPP0E2PO_qy4zaJ1B0JgpBtBcdSWKppjpdmrnEl24z0d7-Ve80RB7owpFpXXtd6VWuZSlZueA5Wc1XHs5cDDIBvCDNFBrSQ&_nc_ht=scontent.fbkk5-3.fna&oh=92a43905adf7ca5f62f0e4ada0bdf249&oe=5D442E31';
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
                    $text = '999 1000x1000 ไป';
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
                    $text = 'เขาว่ากันว่างวดนี้ 5 มา 555';
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
            if ( strpos($textinput, 'ทรัม') !== false || strpos($textinput, 'trump') !== false  || strpos($textinput, 'ทรั้ม') !== false ) {
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
            if (strpos($textinput, 'ไอ้บอท') !== false || strpos($textinput, 'ไอบอท') !== false) {
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
            if ( strpos($textinput, 'กวนติง') !== false || strpos($textinput, 'สึด') !== false || strpos($textinput, 'เควี้ย') !== false || strpos($textinput, 'เชี้ย') !== false || strpos($textinput, 'กลาก') !== false || strpos($textinput, 'กราก') !== false ) {
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
                $rand = rand(0, 15);
                if ($rand == 0) {
                    $img = 'https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/66127906_2544389838913361_4260700135652065280_o.jpg?_nc_cat=110&_nc_oc=AQmDM9Dlhq7fXNeIJsUnW4aP6wN5ipQas4tlyhGDeu9te573XcCSCi5D2nvyK3AEEcI6EWFSFbN_gtt0siw41U0z&_nc_ht=scontent.fbkk5-4.fna&oh=fec892d2a8c53f8e155be609dbc0c984&oe=5DBD78BC';
                } elseif ($rand == 1) {
                    $img = 'https://scontent.fbkk5-7.fna.fbcdn.net/v/t1.0-9/66396440_2543607308991614_258330931255836672_o.jpg?_nc_cat=108&_nc_oc=AQnl2uD4ZOU7IE0QFq2Zg7gAO9K9JzjKq_BeWKqUVklQF-K7OdMvOZk2aaDukAYafqxCLjZKJslpfYgvhbFOV8ly&_nc_ht=scontent.fbkk5-7.fna&oh=b76b165d9a26a3129d4f9fecac05e3ea&oe=5D797DC3';
                } elseif ($rand == 2) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/65818026_2542597349092610_5123844633499009024_o.jpg?_nc_cat=111&_nc_oc=AQkERHvKU9TNszv8ABPnRFgvYX3QSzP-qoHWf1AVRSamzq6pLku1YkwAgJRQDObSgubKzHvnaU2dKQHpG5K6AMZu&_nc_ht=scontent.fbkk5-3.fna&oh=63e0d32f020895aad8c8d7e4861996ff&oe=5DAEC228';
                } elseif ($rand == 3) {
                    $img = 'https://scontent.fbkk25-1.fna.fbcdn.net/v/t1.0-9/65119202_2520513637967648_6428605648769908736_o.jpg?_nc_cat=109&_nc_oc=AQkTdWOQA_jAeiIG5Yve3t0BkSOOlQFQQ34keyXON8sEjhmbIpqrsgb9tM4xxqmPMiIdlO78kqKYlTlyUOzqKVSO&_nc_ht=scontent.fbkk25-1.fna&oh=f459107b305c39c26f12366aafc6ae46&oe=5D78A57F';
                } elseif ($rand == 4) {
                    $img = 'https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/65557404_2519351184750560_589591249011343360_o.jpg?_nc_cat=103&_nc_oc=AQnKFp3v6zTtbdvdTf3I6clTcaJBtkaoFf5SMWcDsPOyePbT7h1XN-W26ShCM68yd2nXnu1NP8a2-YYw5IL-koKQ&_nc_ht=scontent.fbkk5-4.fna&oh=ef2701868abba175705e878eed354491&oe=5DA1FFD6';
                } elseif ($rand == 5) {
                    $img = 'https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/61633723_2478576455494700_5745819386166378496_o.jpg?_nc_cat=110&_nc_oc=AQnvI42u4aeAEmZDwxb2qqAtZrJ1omxaVRRM9CcdR2MeYxMVGqGTkcLnQOvTV3-0ALHGDjl3LmDRyD_xlzYSDuCs&_nc_ht=scontent.fbkk5-4.fna&oh=a69057d995aeec1828cdd443f0e7563a&oe=5DB6C141';
                } elseif ($rand == 6) {
                    $img = 'https://scontent.fbkk5-6.fna.fbcdn.net/v/t1.0-9/60775340_2458136557538690_1889843205751439360_o.jpg?_nc_cat=101&_nc_oc=AQkDtfpzuSG-RuXc7--o317tbbAwVJul9bpyWt2YT94hzhrg0NUChUIgpDoygXyZezjfQVvSRAgGY1mOdRF3ybun&_nc_ht=scontent.fbkk5-6.fna&oh=392a6c853497d09dd5c901fbbca034b4&oe=5DC19654';
                } elseif ($rand == 7) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/60905024_2458136847538661_3813731229983834112_o.jpg?_nc_cat=111&_nc_oc=AQlcewdV3RGXJKJxAmS2NLpoxIGKSD7Zn4cpX1WKieOrs-usPxh6Iz9hxhrYbi5ot7w_gwkwRVjctCdppoS57NBb&_nc_ht=scontent.fbkk5-3.fna&oh=b2734bcebf3e9e68cefef8f163c0d7f2&oe=5DACA98C';
                } elseif ($rand == 8) {
                    $img = 'https://scontent.fbkk5-6.fna.fbcdn.net/v/t1.0-9/60715659_2460219163997096_6055630173389193216_o.jpg?_nc_cat=102&_nc_oc=AQnklSA52ii0bEUT3ovY36pl7sGvGFe3Ca0YgirXVqvX0Ocaa-ARj_YzKygaW1sr8sRtogzE5hppvOmQGdLVzv2Y&_nc_ht=scontent.fbkk5-6.fna&oh=9a0f45c78ead99b8c86cbf4b713c8168&oe=5DB8A67E';
                } elseif ($rand == 9) {
                    $img = 'https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/58669642_2418089958210017_7638001712711598080_o.jpg?_nc_cat=100&_nc_oc=AQnrfV5gQ7HlFyefnwe9riV-5V41Yj8xgJbMznBjaoeNxE1M0IAUTjoaYCCxtqA4TTtPpmAAyhTa48Pao3X5wgxi&_nc_ht=scontent.fbkk5-5.fna&oh=27a3f4c0cc1f8764c99024c8eb46aaf0&oe=5DABAAE3';
                } elseif ($rand == 10) {
                    $img = 'https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.0-9/56584260_2381531805199166_5831592004781342720_o.jpg?_nc_cat=106&_nc_oc=AQm8X0ERsBQxxbH_dnALoez7VNf6sxdUIGcHNFlzH9F1_J6st4_nati56lfIG9lrxOb3WhJetoP64FprFLuEIbIC&_nc_ht=scontent.fbkk5-8.fna&oh=9e88597666df94f2ecfd4050a62e970f&oe=5D79ED96';
                } elseif ($rand == 11) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/52715534_2319049751447372_7011439320791777280_o.jpg?_nc_cat=111&_nc_oc=AQmzs-UDU7PTomguUYp-jhK5NDTaS3tlM8O3p-mjCFWo9g9UeJ4Tv4Btx99cOWAxSs6mJduU4SkT0QAs9Y3otCLm&_nc_ht=scontent.fbkk5-3.fna&oh=840ad03228ccc58633627717ffd59354&oe=5DB71A45';
                } elseif ($rand == 12) {
                    $img = 'https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.0-9/51374387_2289931187692562_7547708808521318400_o.jpg?_nc_cat=106&_nc_oc=AQlckxzciotS7XpyjY85w8V80Js5x0Xk0Rw3Llr30ei0XnUB9WKUp_Tblmtp3nFLhm_toD-G9NtfweMInsUqczhd&_nc_ht=scontent.fbkk5-8.fna&oh=68afce33d5a408923bf4ac0562ccb754&oe=5DC5C62E';
                } elseif ($rand == 13) {
                    $img = 'https://scontent.fbkk25-1.fna.fbcdn.net/v/t1.0-9/57170633_2394787150540298_1017019178764206080_o.jpg?_nc_cat=109&_nc_oc=AQl3yZmRyh2nFv6iW_2VogZ8tG9VR_Itzi1uWT3NuMSKcvF_zeQFMdUQAV-UHsuDjW5HDZ9ZukTXSmx7WlXQd4NP&_nc_ht=scontent.fbkk25-1.fna&oh=733c24ce659f2daa358bb4883a80d055&oe=5DAE87B8';
                } elseif ($rand == 14) {
                    $img = 'https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/56890408_2395710657114614_7498877237978988544_o.jpg?_nc_cat=103&_nc_oc=AQm-M0ghXkoimqY_HUW4IYIcSIIY0fMn8adIbcm15toDWwZIEpKpRy5M_-vle_zxtRNdv9hyBhYzUJVkFEbjroOt&_nc_ht=scontent.fbkk5-4.fna&oh=96d7e6acded605091ef520d3901e4b17&oe=5DC3ABED';
                } else {
                    $text = 'กินอะไรกันดีละ';
                    $case = 1;
                }
                $case = 2;
            }
            if ( strpos($textinput, 'ตู่') !== false || strpos($textinput, 'ประยุท') !== false || strpos($textinput, 'จันทรโอชา') !== false || strpos($textinput, 'ปรับทัศนคติ') !== false ) {
                $rand = rand(0, 10);
                if ($rand == 0) {
                    $text = 'เอิ่มมม...งานนี้ mod จะไม่ยุ่ง 5555';
                    $case = 1;
                } elseif ($rand == 1) {
                    $img = 'https://thaipublica.org/wp-content/uploads/2015/11/thaipulica-พล.อ.ประยุทธ์-จันทร์โอชา2.jpg';
                } elseif ($rand == 2) {
                    $img = 'https://www.77kaoded.com/wp-content/uploads/พล.อ.ประยุทธ์-จันทร์โอชา.jpg';
                } elseif ($rand == 3) {
                    $img = 'https://www.prachachat.net/wp-content/uploads/2017/12/201701255931-1-1.jpg';
                } elseif ($rand == 4) {
                    $img = 'https://upload.wikimedia.org/wikipedia/commons/1/1b/Vladimir_Putin_meeting_Prayut_Chan-o-cha_%282016-05-19%29-02_cropped1.jpg';
                } elseif ($rand == 5) {
                    $img = 'https://www.thairath.co.th/media/CiHZjUdJ5HPNXJ92GP8NsxFOJAi5JcKcbF.jpg';
                } elseif ($rand == 6) {
                    $img = 'https://static.naewna.com/uploads/news/source/317203.jpg';
                } elseif ($rand == 7) {
                    $img = 'https://site-assets.mediaoxide.com/workpointnews/2019/01/13135739/1547362654_82266_22.jpg';
                } elseif ($rand == 8) {
                    $img = 'https://asiamedia.lmu.edu/wp-content/uploads/2017/10/prayut_thailand.jpg?w=640';
                } elseif ($rand == 9) {
                    $text = 'เปลี่ยนเรื่องคุยกันดีกว่ามั้ง 55555';
                    $case = 1;
                } else {
                    $text = 'พูดชื่อนี้แล้วปวดหัว';
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
                    $text = 'เปิดเปิดหน้าเข้าออเดอร์ หลับตาแล้วจิ้มเลย 555';
                } elseif ($rand == 4) {
                    $text = 'วิเคราะห์กราฟแปป';
                } elseif ($rand == 5) {
                    $text = 'ขอแต่ Mod บอกซิกมาบ้างสิจะได้กดตามบ้าง';
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
            if ( strpos($textinput, 'ovt') !== false || strpos($textinput, 'OVT') !== false || strpos($textinput, 'Ovt') !== false || strpos($textinput, 'overtrade') !== false || strpos($textinput, 'Overtrade') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'เป็นสิ่งที่ไม่สมควรทำเลยนะ';
                } elseif ($rand == 1) {
                    $text = 'แน่ใจแล้วหรอ จะ overtrade อ่ะ';
                } elseif ($rand == 2) {
                    $text = 'ไม่ดีมั้ง พอร์ตจะเสี่ยงไป';
                } elseif ($rand == 3) {
                    $text = 'ระวังพอร์ตบินนะถ้ากราฟผันผวน';
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
            if ( strpos($textinput, 'กาก') !== false || strpos($textinput, 'กา ก') !== false || strpos($textinput, 'ก า ก') !== false || strpos($textinput, 'ก าก') !== false || strpos($textinput, 'kak') !== false || strpos($textinput, 'Kak') !== false || strpos($textinput, 'KAK') !== false ) {
                $rand = rand(0, 10);
                if ($rand == 0) {
                    $text = 'ไม่สนิทอย่าติดตลก';
                } elseif ($rand == 1) {
                    $text = 'ไร้สาระ'; //มึง
                } elseif ($rand == 2) {
                    $text = 'กากพ่... 555'; // พ่อง
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
            if ( strpos($textinput, 'แก้ไม้') !== false ) {
                $text = 'วิธีการแก้ไม้แบบปิดรวบ
                
https://goo.gl/cOQgUR';
                $case = 1;
            }/*
            if ( strpos($textinput, 'ตะกร้า') !== false || strpos($textinput, 'ตระกร้า') !== false || strpos($textinput, 'finviz') !== false || strpos($textinput, 'Finviz') !== false ) {
                $text = 'เช็คอันดับค่าเงินแบบ Real-time ได้ที่นี่ 
                
http://bit.ly/2JMNpeZ';
                $case = 1;
            }*/
            if ( strpos($textinput, 'Volume') !== false || strpos($textinput, 'volume') !== false ) {
                $text = 'Volume คืออะไร ???
                
https://goo.gl/RN5h1f';
                $case = 1;
            }
            if ( strpos($textinput, 'Fibo') !== false || strpos($textinput, 'fibo') !== false ) {
                $text = 'การใช้งาน Fibo Retractment
                
https://goo.gl/M3gbyK';
                $case = 1;
            }
            if ( strpos($textinput, 'Gap') !== false || strpos($textinput, 'gap') !== false ) {
                $text = 'Gap คืออะไร ???
                
https://goo.gl/sw6qTp';
                $case = 1;
            }
            if ( strpos($textinput, 'weltrade') !== false || strpos($textinput, 'Weltrade') !== false || strpos($textinput, 'เวลเทรด') !== false ) {
                $text = 'Link การสมัคร (  รหัสพันธมิตรหรือรหัสผู้เเนะนำ :: 12411 )
                
http://th.weltrade.com/?r1=ipartner&r2=12411
หากใครใคร่สนับสนุนกลุ่มเราสามารถคลิกลิ้งด้านบนเพื่อเปิดบัญชีได้เลยครับ';
                $case = 1;
            }

            if ( strpos($textinput, 'icmarket') !== false || strpos($textinput, 'Icmarket') !== false || strpos($textinput, 'ICmarket') !== false || strpos($textinput, 'ไอซี') !== false ) {
                $text = 'Link การสมัคร
                
http://icmarkets.com/?camp=25748
หากใครใคร่สนับสนุนกลุ่มเราสามารถคลิกลิ้งด้านบนเพื่อเปิดบัญชีได้เลยครับ';
                $case = 1;
            }
            if ( strpos($textinput, 'crypto') !== false || strpos($textinput, 'digital') !== false || strpos($textinput, 'btc') !== false || strpos($textinput, 'eth') !== false || strpos($textinput, 'ltc') !== false || strpos($textinput, 'บิท') !== false || strpos($textinput, 'bitcoin') !== false || strpos($textinput, 'Bitcoin') !== false ) {
                $text = 'เช็คราคาได้ที่นี่เลย
                
https://goo.gl/BdLmhS';
                $case = 1;
            }
            if ( strpos($textinput, 'บทวิเคราะ') !== false ) {
                $text = 'ดูบทวิเคราะห์ทองคำประจำวัน-ย้อนหลังได้ที่ http://www.tradersociety.org';
                $case = 1;
            }
            if ( strpos($textinput, 'ฮ่าๆๆ') !== false || strpos($textinput, '555+') !== false || strpos($textinput, 'ฮา') !== false ) {
                $rand = rand(0, 6);
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
