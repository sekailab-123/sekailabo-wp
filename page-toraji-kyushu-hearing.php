<?php
/**
 * Template Name: トラジ 九州新店舗｜初回採用ヒアリングシート
 * Template Post Type: page
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>トラジ 九州新店舗｜初回採用ヒアリングシート</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class('toraji-hearing-page'); ?>>
<?php wp_body_open(); ?>
<style>
  :root { --toraji-ink:#202020; --toraji-muted:#68645f; --toraji-line:#dcd7d0; --toraji-paper:#fffdf9; --toraji-accent:#8a2e20; --toraji-soft:#f7f1ea; }
  body.toraji-hearing-page { margin:0; background:#eee9e2; }
  .toraji-sheet { max-width:980px; margin:28px auto 56px; padding:46px 54px 64px; background:var(--toraji-paper); box-shadow:0 2px 20px #00000012; color:var(--toraji-ink); font-family:-apple-system,BlinkMacSystemFont,"Hiragino Sans","Yu Gothic",Meiryo,sans-serif; line-height:1.65; text-align:left!important; }
  .toraji-sheet, .toraji-sheet * { box-sizing:border-box; text-align:left!important; }
  .toraji-sheet__header { border-bottom:3px solid var(--toraji-accent); padding-bottom:20px; margin-bottom:24px; }
  .toraji-sheet__eyebrow { color:var(--toraji-accent); font-size:12px; letter-spacing:.12em; font-weight:800; }
  .toraji-sheet h1 { margin:5px 0 7px; font-size:30px; line-height:1.45; letter-spacing:.03em; }
  .toraji-sheet__lead,.toraji-sheet__note,.toraji-sheet__hint { color:var(--toraji-muted); font-size:13px; }
  .toraji-sheet__guide { background:var(--toraji-soft); border-left:4px solid var(--toraji-accent); padding:12px 15px; margin:18px 0 28px; font-size:13px; }
  .toraji-sheet__guide strong,.toraji-sheet__section h2 { color:var(--toraji-accent); }
  .toraji-sheet__section { margin-top:31px; }
  .toraji-sheet__section h2 { font-size:20px; margin:0 0 6px; display:flex; align-items:center; gap:10px; }
  .toraji-sheet__number { display:inline-flex; width:25px; height:25px; align-items:center; justify-content:center; color:#fff; background:var(--toraji-accent); border-radius:50%; font-size:13px; }
  .toraji-sheet__note { margin:0 0 14px 35px; }
  .toraji-question,.toraji-fact { padding:15px 0; border-top:1px solid var(--toraji-line); }
  .toraji-question:first-of-type,.toraji-fact:first-of-type { border-top:0; }
  .toraji-question__title { font-weight:800; font-size:15px; margin:0 0 8px; }
  .toraji-sheet input[type="text"],.toraji-sheet input[type="date"],.toraji-sheet textarea { width:100%; border:1px solid var(--toraji-line); border-radius:5px; padding:9px 10px; background:#fff; color:var(--toraji-ink); font:inherit; font-size:14px; }
  .toraji-sheet input:focus,.toraji-sheet textarea:focus { outline:2px solid #d9b8ad; border-color:var(--toraji-accent); }
  .toraji-sheet textarea { min-height:72px; resize:vertical; }
  .toraji-choices { display:flex; flex-wrap:wrap; gap:7px 16px; margin:0 0 10px; font-size:14px; }
  .toraji-choices label,.toraji-fact__check label { display:flex; align-items:center; gap:5px; cursor:pointer; }
  .toraji-fact { display:flex; align-items:flex-start; gap:10px; font-size:14px; }
  .toraji-fact__text { flex:1; }
  .toraji-fact__check { display:flex; gap:10px; white-space:nowrap; color:var(--toraji-muted); font-size:12px; }
  .toraji-grid { display:grid; grid-template-columns:repeat(2,minmax(0,1fr)); gap:12px; }
  .toraji-field-label { display:block; color:var(--toraji-muted); font-size:12px; font-weight:700; margin-bottom:4px; }
  .toraji-priority { margin:20px 0 0; padding:17px; background:#f3ebe4; border-radius:7px; font-size:13px; }
  .toraji-priority h3 { font-size:15px; margin:0 0 7px; color:var(--toraji-accent); }
  .toraji-priority ul { padding-left:20px; margin:7px 0 0; }
  .toraji-decision { border:1px solid var(--toraji-accent); border-radius:7px; padding:18px; margin-top:32px; background:#fffaf6; }
  .toraji-table-wrap { overflow-x:auto; }
  .toraji-sheet table { border-collapse:collapse; width:100%; margin-top:9px; font-size:13px; }
  .toraji-sheet th,.toraji-sheet td { border:1px solid var(--toraji-line); padding:9px; text-align:left; vertical-align:top; }
  .toraji-sheet th { background:#f5f0e9; white-space:nowrap; }
  .toraji-sheet td input { min-width:110px; }
  .toraji-submit { display:flex; justify-content:flex-end; gap:12px; align-items:center; margin-top:28px; }
  .toraji-submit button { appearance:none; border:0; background:var(--toraji-accent); color:#fff; border-radius:5px; padding:11px 18px; font:inherit; font-weight:700; cursor:pointer; }
  .toraji-status { color:#326b42; font-size:13px; margin-right:auto; }
  .toraji-success { margin:0 0 20px; padding:12px 15px; background:#edf7ef; border-left:4px solid #326b42; color:#245534; }
  .toraji-honeypot { position:absolute!important; width:1px!important; height:1px!important; overflow:hidden!important; clip:rect(1px,1px,1px,1px)!important; white-space:nowrap!important; }
  .toraji-sheet footer { margin-top:30px; padding-top:12px; border-top:1px solid var(--toraji-line); color:var(--toraji-muted); font-size:11px; }
  @media(max-width:680px) { .toraji-sheet { margin:0; padding:28px 20px 42px; } .toraji-sheet h1 { font-size:25px; } .toraji-grid { grid-template-columns:1fr; } .toraji-fact { flex-direction:column; } }
  @media print { body { background:#fff; } .toraji-sheet { box-shadow:none; margin:0; max-width:none; padding:12mm; } .toraji-submit { display:none; } .toraji-question,.toraji-fact { break-inside:avoid; } }
</style>
<main class="toraji-sheet" id="toraji-hearing">

  <?php if (isset($_GET['toraji_sent'])) : ?>
    <p class="toraji-success" role="status">送信しました。内容はサイト管理者へメールで共有されています。</p>
  <?php elseif (isset($_GET['toraji_error'])) : ?>
    <p class="toraji-success" role="alert">送信できませんでした。時間をおいて再度お試しください。</p>
  <?php endif; ?>
  <aside class="toraji-sheet__guide"><strong>今回のゴール：</strong>「新店舗がいつ・どこに・どんな体制でオープンするか」と「サイトの対象範囲」を確定します。初回では原稿表現より、スコープ・スケジュール・優先職種・素材の有無を押さえてください。</aside>
  <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
    <input type="hidden" name="action" value="toraji_kyushu_hearing_submit">
    <?php wp_nonce_field('toraji_kyushu_hearing_submit', 'toraji_hearing_nonce'); ?>
    <input type="hidden" id="toraji-autosave-nonce" value="<?php echo esc_attr(wp_create_nonce('toraji_hearing_autosave')); ?>">
    <p class="toraji-honeypot"><label>この欄は空欄のままにしてください <input type="text" name="website" autocomplete="off" tabindex="-1"></label></p>

    <section class="toraji-sheet__section">
      <h2><span class="toraji-sheet__number">1</span>前提の確認</h2><p class="toraji-sheet__note">こちらで把握している内容の読み合わせです。指摘ではなく前提共有としてお願いします。</p>
      <?php foreach (array('来年4月頃、九州エリアに新店舗がオープン予定' => 'fact_opening', '今回のサイトは九州向け（天神店単独ではなく、新店舗が主対象）' => 'fact_target', '今年10月に、何らかの形で情報を公開したい意向' => 'fact_release') as $text => $name) : ?>
        <div class="toraji-fact"><div class="toraji-fact__text"><?php echo esc_html($text); ?></div><div class="toraji-fact__check"><label><input type="radio" name="<?php echo esc_attr($name); ?>" value="相違なし">相違なし</label><label><input type="radio" name="<?php echo esc_attr($name); ?>" value="相違あり">相違あり</label></div></div>
      <?php endforeach; ?>
      <div class="toraji-question"><p class="toraji-question__title">相違があった点・補足があれば</p><textarea name="fact_notes"></textarea></div>
    </section>

    <section class="toraji-sheet__section">
      <h2><span class="toraji-sheet__number">2</span>新店舗の基本情報</h2><p class="toraji-sheet__note">スケジュールとサイト設計の起点になる情報です。</p>
      <div class="toraji-question"><p class="toraji-question__title">店舗名・所在地（エリア）は決まっていますか？</p><input type="text" name="store_location" placeholder="未定の場合は検討中のエリア・候補地でも可"></div>
      <div class="toraji-question"><p class="toraji-question__title">オープン予定日はいつですか？ 確度は？ <span class="toraji-sheet__hint">（確定／目安／未定）</span></p><div class="toraji-grid"><div><label class="toraji-field-label">オープン予定日</label><input type="date" name="opening_date"></div><div><label class="toraji-field-label">確度</label><div class="toraji-choices"><label><input type="radio" name="opening_confidence" value="確定">確定</label><label><input type="radio" name="opening_confidence" value="目安">目安</label><label><input type="radio" name="opening_confidence" value="未定">未定</label></div></div></div></div>
      <div class="toraji-question"><p class="toraji-question__title">今回の出店の背景は？</p><textarea name="opening_background"></textarea></div>
      <div class="toraji-question"><p class="toraji-question__title">サイト制作の希望納期（公開希望日）は？</p><input type="date" name="site_deadline"></div>
    </section>

    <section class="toraji-sheet__section">
      <h2><span class="toraji-sheet__number">3</span>サイトのスコープ</h2><p class="toraji-sheet__note">ここが決まらないと設問も見積もりも決まりません。</p>
      <div class="toraji-question"><p class="toraji-question__title">サイトの対象範囲は？</p><div class="toraji-choices"><label><input type="radio" name="scope" value="A. 新店舗単店ページ">A. 新店舗単店ページ</label><label><input type="radio" name="scope" value="B. 九州エリア採用ポータル（既存店＋新店舗）">B. 九州エリア採用ポータル（既存店＋新店舗）</label><label><input type="radio" name="scope" value="C. アルバイト＋正社員含む総合採用サイト">C. アルバイト＋正社員含む総合採用サイト</label></div></div>
      <div class="toraji-question"><p class="toraji-question__title">天神店（既存店）や公式リクルートサイトとの関係は？</p><textarea name="site_relationship" placeholder="相互リンクする／独立させる／トーンを合わせる など"></textarea></div>
      <div class="toraji-question"><p class="toraji-question__title">東京ほか既存店舗と打ち出しを変えたい点は？</p><textarea name="regional_difference"></textarea></div>
    </section>

    <section class="toraji-sheet__section">
      <h2><span class="toraji-sheet__number">4</span>募集職種・人数計画</h2><p class="toraji-sheet__note">オープン前提の採用なので、入社時期も含めて確認します。</p>
      <div class="toraji-question"><p class="toraji-question__title">募集する職種と、それぞれの予定人数は？</p><textarea name="positions" placeholder="例：ホールアルバイト○名／キッチンアルバイト○名／社員・店長候補○名"></textarea></div>
      <div class="toraji-question"><p class="toraji-question__title">特に優先して採用したいポジションは？</p><input type="text" name="priority_position"></div>
      <div class="toraji-question"><p class="toraji-question__title">パート・アルバイト以外（正社員・店長候補など）の募集も必要ですか？</p><div class="toraji-choices"><label><input type="checkbox" name="fulltime_needed" value="必要">必要</label></div><input type="text" name="fulltime_details" placeholder="必要な場合の人数・時期"></div>
      <div class="toraji-question"><p class="toraji-question__title">特に採用したい人物像は？</p><div class="toraji-choices"><?php foreach (array('未経験者','飲食経験者','学生','フリーター','主婦・主夫','正社員志向') as $persona) : ?><label><input type="checkbox" name="personas[]" value="<?php echo esc_attr($persona); ?>"><?php echo esc_html($persona); ?></label><?php endforeach; ?></div><textarea name="persona_notes" placeholder="必須条件・歓迎条件、避けたいミスマッチも記載"></textarea></div>
    </section>

    <section class="toraji-sheet__section">
      <h2><span class="toraji-sheet__number">5</span>募集条件（ざっくり全体感）</h2><p class="toraji-sheet__note">詳しい条件は職種別ヒアリングシートで別途確認します。ここでは職種間で共通する大枠だけ押さえます。</p>
      <div class="toraji-question"><p class="toraji-question__title">職種によらず共通で出せる待遇・条件は？</p><div class="toraji-choices"><?php foreach (array('まかない','交通費','制服貸与','社会保険','社員登用') as $benefit) : ?><label><input type="checkbox" name="benefits[]" value="<?php echo esc_attr($benefit); ?>"><?php echo esc_html($benefit); ?></label><?php endforeach; ?></div></div>
      <div class="toraji-question"><p class="toraji-question__title">給与水準のざっくりした目安は？</p><input type="text" name="salary_range" placeholder="例：時給1,200円台を想定、詳細は職種別に確認"></div>
    </section>

    <section class="toraji-sheet__section">
      <h2><span class="toraji-sheet__number">6</span>新店舗ならではの魅力</h2><p class="toraji-sheet__note">新店には実績がまだありません。天神店の資産をどう活かすかがポイントです。</p>
      <div class="toraji-question"><p class="toraji-question__title">天神店の採用実績で、新店舗の訴求に活かせそうな点は？</p><textarea name="tenjin_assets"></textarea></div>
      <div class="toraji-question"><p class="toraji-question__title">「トラジらしさ」を、新店舗でどう伝えたいですか？</p><textarea name="brand_message"></textarea></div>
      <div class="toraji-question"><p class="toraji-question__title">他の焼肉店・飲食店（九州エリア）と比べて、トラジならではの違いは？</p><textarea name="competitive_difference" placeholder="例：接客、商品、客層、教育、働き方など"></textarea></div>
      <div class="toraji-priority"><h3>初回で押さえておきたい観点</h3><ul><li>新店は「一緒に立ち上げる」体験そのものが訴求材料になる</li><li>天神店のスタッフの声・写真を、九州の他店舗にも通用する形で流用できるか</li><li>九州エリアで比較される競合との違いをどこに置くか</li></ul></div>
    </section>

    <section class="toraji-sheet__section">
      <h2><span class="toraji-sheet__number">7</span>素材・応募体制</h2><p class="toraji-sheet__note">新店は写真がまだ無いため、代替案とスケジュールを確認します。</p>
      <div class="toraji-question"><p class="toraji-question__title">新店舗オープン前の撮影予定はありますか？ それまでは天神店の写真を仮で使ってよいですか？</p><textarea name="photo_plan"></textarea></div>
      <div class="toraji-question"><p class="toraji-question__title">応募窓口はどうしますか？</p><input type="text" name="application_channel" placeholder="電話／LINE／フォーム、東京本社か九州窓口か"></div>
    </section>

    <section class="toraji-decision">
      <h2>打ち合わせ終了時の決定事項</h2><div class="toraji-table-wrap"><table><thead><tr><th>決めること</th><th>決定内容</th><th>担当</th><th>期限</th></tr></thead><tbody>
      <?php foreach (array('サイトのスコープ（A/B/C）','サイト制作の納期（公開希望日）','その納期の位置づけ（ティザー／先行エントリー／本番）','募集職種・人数・優先ポジション','オープンまでの逆算スケジュール（募集→採用→研修→OPEN）','撮影・素材の準備（天神店の代用可否含む）','予算・決裁ルート・次回打ち合わせ') as $index => $decision) : ?><tr><td><?php echo esc_html($decision); ?></td><td><input type="text" name="decisions[<?php echo $index; ?>][content]"></td><td><input type="text" name="decisions[<?php echo $index; ?>][owner]"></td><td><input type="text" name="decisions[<?php echo $index; ?>][due]"></td></tr><?php endforeach; ?>
      </tbody></table></div>
    </section>
    <div class="toraji-submit"><span class="toraji-status" id="toraji-save-status" aria-live="polite"></span><button type="button" class="toraji-print">印刷・PDF保存</button><button type="submit">内容を送信</button></div>
  </form>
  <footer>※入力内容はこの端末とサーバーに自動保存されます。「内容を送信」を押すと、サイト管理者にもメールで送信されます。</footer>
</main>
<script>
(() => {
  const key = 'toraji-kyushu-newstore-intake-v3';
  const sessionKey = `${key}-session`;
  const form = document.querySelector('#toraji-hearing form');
  const status = document.getElementById('toraji-save-status');
  const fields = [...form.querySelectorAll('input:not([type="hidden"]):not([name="website"]), textarea')];
  let autosaveTimer;
  let draftId = localStorage.getItem(`${key}-draft-id`) || '';
  let sessionId = localStorage.getItem(sessionKey);
  if (!sessionId) { sessionId = crypto.randomUUID ? crypto.randomUUID() : `${Date.now()}-${Math.random().toString(36).slice(2)}`; localStorage.setItem(sessionKey, sessionId); }
  const getValues = () => { const data = new FormData(form); const values = {}; for (const [name, value] of data.entries()) { if (!['action', 'toraji_hearing_nonce', 'website'].includes(name)) { (values[name] ||= []).push(value); } } return values; };
  const saveServer = async (values) => { try { const body = new URLSearchParams({ action: 'toraji_hearing_autosave', nonce: document.getElementById('toraji-autosave-nonce').value, session_id: sessionId, draft_id: draftId, data: JSON.stringify(values) }); const response = await fetch('<?php echo esc_url(admin_url('admin-ajax.php')); ?>', { method: 'POST', headers: { 'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8' }, body }); const result = await response.json(); if (!result.success) throw new Error(); draftId = result.data.draft_id; localStorage.setItem(`${key}-draft-id`, draftId); status.textContent = 'この端末・サーバーに自動保存しました'; } catch (error) { status.textContent = 'この端末に保存しました（サーバー保存を再試行します）'; } };
  const save = () => { const values = getValues(); localStorage.setItem(key, JSON.stringify(values)); status.textContent = '保存中…'; clearTimeout(autosaveTimer); autosaveTimer = setTimeout(() => saveServer(values), 900); };
  try { const values = JSON.parse(localStorage.getItem(key) || '{}'); fields.forEach(field => { const saved = values[field.name] || []; if (field.type === 'checkbox' || field.type === 'radio') field.checked = saved.includes(field.value); else if (saved[0] !== undefined) field.value = saved[0]; }); } catch (e) {}
  fields.forEach(field => { field.addEventListener('input', save); field.addEventListener('change', save); });
  form.addEventListener('submit', () => { localStorage.removeItem(key); localStorage.removeItem(`${key}-draft-id`); });
  document.querySelector('.toraji-print').addEventListener('click', () => window.print());
})();
</script>
<?php wp_footer(); ?>
</body>
</html>
