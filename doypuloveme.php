<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>เบ๊บๆ รักเค้ามั้ย</title>
    <style>
        :root {
            --bg: #f6f7fb;
            --card: #fff;
            --accent: #ff6b81;
            --muted: #666
        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            font-family: Inter, system-ui, Segoe UI, Roboto, "Noto Sans Thai UI", sans-serif;
            background: linear-gradient(180deg, #f0f4ff, #f6f7fb);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .card {
            width: 92vw;
            max-width: 460px;
            background: var(--card);
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(20, 30, 60, 0.08);
            padding: 28px;
            text-align: center
        }

        .title {
            font-size: 18px;
            margin-bottom: 12px;
            color: #222
        }

        .subtitle {
            font-size: 13px;
            color: var(--muted);
            margin-bottom: 18px
        }

        .gif-wrap {
            width: 300px;
            height: 400px;
            margin: 0 auto;
            border-radius: 14px;
            overflow: hidden;
            background: #eee;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .gif-wrapp {
            width: 300px;
            height: 300px;
            margin: 0 auto;
            border-radius: 14px;
            overflow: hidden;
            background: #eee;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .gif-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        .choices {
            display: flex;
            gap: 14px;
            justify-content: center;
            margin-top: 18px
        }

        .btn {
            --size: 1;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 22px;
            border-radius: 12px;
            font-weight: 600;
            cursor: pointer;
            user-select: none;
            transition: transform .18s ease, opacity .18s;
            transform: scale(var(--size));
            box-shadow: 0 6px 18px rgba(30, 40, 80, .06);
        }

        .btn.yes {
            background: linear-gradient(90deg, var(--accent), #ff8fb3);
            color: #fff
        }

        .btn.no {
            background: #fff;
            border: 2px solid #eee;
            color: #222
        }

        .small-note {
            font-size: 12px;
            color: var(--muted);
            margin-top: 12px
        }

        /* final page */
        .final {
            display: none;
            flex-direction: column;
            align-items: center;
            gap: 12px
        }

        .heart {
            font-size: 64px;
            color: var(--accent);
            transform: scale(0);
            transition: transform .6s cubic-bezier(.2, .9, .3, 1)
        }

        .final.show {
            display: flex
        }

        .heart.pop {
            transform: scale(1)
        }
    </style>
</head>

<body>
    <div class="card" id="app">
        <div class="main-screen">
            <div class="title">Babe Babe Do You Love me ?</div>
            <div class="subtitle">ตอบดีๆนะ55555 บอกก่อน</div>

            <div class="gif-wrap" id="gifWrap">
                <div class="tenor-gif-embed" data-postid="16924779346084467219" data-share-method="host" data-aspect-ratio="0.75" data-width="100%"><a href="https://tenor.com/view/puss-in-boots-eyes-gif-16924779346084467219">Puss In Boots Eyes GIF</a>from <a href="https://tenor.com/search/puss+in+boots-gifs">Puss In Boots GIFs</a></div>
                <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
            </div>

            <div class="choices">
                <div class="btn no" id="btnNo" style="--size:1">NO!!</div>
                <div class="btn yes" id="btnYes" style="--size:1">YES BABE</div>
            </div>
            <div class="small-note">I love U makmak na kab</div>
        </div>

        <div class="final" id="finalPage">
            <div class="heart" id="heart">❤️</div>
            <div class="gif-wrapp" id="gifWrapp">
                <div class="tenor-gif-embed" data-postid="12569073819004889662" data-share-method="host" data-aspect-ratio="1" data-width="100%"><a href="https://tenor.com/view/dog-doggo-window-goofy-silly-gif-12569073819004889662">Dog Doggo GIF</a>from <a href="https://tenor.com/search/dog-gifs">Dog GIFs</a></div>
                <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
            </div>
            <h2>Love Babe Babe too kub 💌</h2>
            <p class="subtitle">น่ารักกับพีพีไปนานๆนะ เบิ้บบูว</p>

        </div>
    </div>

    <script>
        const btnNo = document.getElementById('btnNo');
        const btnYes = document.getElementById('btnYes');
        const finalPage = document.getElementById('finalPage');
        const mainScreen = document.querySelector('.main-screen');
        const heart = document.getElementById('heart');

        let scaleNo = 1;
        let scaleYes = 1;

        const MIN_NO = 0.2;
        const MAX_YES = 3.0;

        btnNo.addEventListener('click', () => {
            scaleNo *= 0.86;
            if (scaleNo < MIN_NO) scaleNo = MIN_NO;
            btnNo.style.setProperty('--size', scaleNo);
            const dx = (Math.random() - 0.5) * 12;
            const dy = (Math.random() - 0.5) * 8;
            btnNo.style.transform = `translate(${dx}px, ${dy}px) scale(${scaleNo})`;
            setTimeout(() => {
                btnNo.style.transform = `translate(0,0) scale(${scaleNo})`
            }, 180);
            if (scaleNo <= MIN_NO + 0.01) {
                btnNo.textContent = 'ฮึ่ยย';
            }
            // เมื่อกดไม่รัก ให้ปุ่มใช่ขยายด้วย
            scaleYes *= 1.15;
            if (scaleYes > MAX_YES) scaleYes = MAX_YES;
            btnYes.style.setProperty('--size', scaleYes);
        });

        btnYes.addEventListener('click', () => {
            scaleYes *= 1.25;
            if (scaleYes > MAX_YES) scaleYes = MAX_YES;
            btnYes.style.setProperty('--size', scaleYes);
            btnYes.style.transform = `scale(${scaleYes})`;
            setTimeout(() => {
                mainScreen.style.display = 'none';
                finalPage.classList.add('show');
                heart.classList.add('pop');
            }, 280);
        });

        document.getElementById('backBtn').addEventListener('click', () => {
            finalPage.classList.remove('show');
            heart.classList.remove('pop');
            mainScreen.style.display = 'block';
            scaleNo = 1;
            scaleYes = 1;
            btnNo.style.setProperty('--size', scaleNo);
            btnYes.style.setProperty('--size', scaleYes);
            btnNo.textContent = 'ไม่รัก';
        });

        btnNo.addEventListener('mouseenter', () => {
            const x = (Math.random() - 0.5) * 18;
            const y = (Math.random() - 0.5) * 10;
            btnNo.style.transform = `translate(${x}px, ${y}px) scale(${scaleNo})`;
        });
        btnNo.addEventListener('mouseleave', () => {
            btnNo.style.transform = `translate(0,0) scale(${scaleNo})`;
        });
    </script>
</body>

</html>