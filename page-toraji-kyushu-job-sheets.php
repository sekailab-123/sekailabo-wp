<?php
/**
 * Template Name: トラジ 九州新店舗｜職種別ヒアリングシート
 * Template Post Type: page
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>トラジ様｜職種別求人ヒアリングシート</title>
  <?php wp_head(); ?>
  <script src="https://www.gstatic.com/firebasejs/10.12.0/firebase-app-compat.js"></script>
  <script src="https://www.gstatic.com/firebasejs/10.12.0/firebase-auth-compat.js"></script>
  <script src="https://www.gstatic.com/firebasejs/10.12.0/firebase-database-compat.js"></script>
  <style>
    :root { --ink:#202020; --muted:#68645f; --line:#dcd7d0; --paper:#fffdf9; --accent:#8a2e20; --soft:#f7f1ea; --success:#326b42; }
    * { box-sizing:border-box; }
    body.toraji-job-sheet { margin:0; background:#eee9e2; color:var(--ink); font-family:-apple-system,BlinkMacSystemFont,"Hiragino Sans","Yu Gothic",Meiryo,sans-serif; line-height:1.65; }
    .job-sheet { max-width:1060px; margin:28px auto 56px; padding:46px 54px 64px; background:var(--paper); box-shadow:0 2px 20px #00000012; text-align:left; }
    .job-sheet * { text-align:left; }
    .job-sheet__header { border-bottom:3px solid var(--accent); padding-bottom:20px; margin-bottom:22px; }
    .job-sheet h1 { margin:0 0 6px; font-size:30px; line-height:1.4; letter-spacing:.03em; }
    .lead,.section-note,.hint,footer { color:var(--muted); font-size:13px; }
    .lead { margin:0; }
    .guide { background:var(--soft); border-left:4px solid var(--accent); padding:12px 15px; margin:18px 0 24px; font-size:13px; }
    .guide strong { color:var(--accent); }
    .job-picker { margin:0 0 30px; padding:0; border:0; background:transparent; }
    .job-picker__top { display:flex; align-items:center; justify-content:space-between; gap:12px; margin-bottom:12px; }
    .job-picker h2 { margin:0; color:var(--accent); font-size:16px; }
    .job-picker__top p { margin:0; color:var(--muted); font-size:12px; }
    .job-cards { display:flex; align-items:flex-end; gap:5px; overflow-x:auto; border-bottom:2px solid var(--accent); padding:0 4px; }
    .job-card { position:relative; flex:1 0 190px; min-height:98px; border:1px solid var(--line); border-bottom:0; border-radius:8px 8px 0 0; padding:13px 14px; background:#eee9e2; color:var(--ink)!important; cursor:pointer; transition:.15s; }
    .job-card:hover { background:#f7f1ea; border-color:var(--accent); color:var(--accent)!important; }
    .job-card.is-active { border:2px solid var(--accent); border-bottom:0; background:var(--paper); color:var(--accent)!important; padding:12px 13px 14px; margin-bottom:-2px; }
    .job-card__title { display:block; font-weight:800; font-size:15px; }
    .job-card__meta { display:block; color:var(--muted)!important; font-size:12px; margin-top:3px; }
    .job-card__count { display:inline-block; margin-top:7px; color:var(--success); font-size:11px; font-weight:700; }
    button { appearance:none; border:0; background:var(--accent); color:#fff; border-radius:5px; padding:9px 13px; font:inherit; font-size:13px; font-weight:700; cursor:pointer; }
    button.secondary { background:#625e59; }
    button.ghost { background:#fff; border:1px solid var(--line); color:var(--ink); }
    .sheet-title { display:flex; align-items:baseline; gap:10px; margin:0 0 4px; }
    .sheet-title h2 { margin:0; font-size:22px; color:var(--accent); }
    .sheet-title .badge { background:var(--soft); color:var(--accent); padding:2px 8px; border-radius:20px; font-size:11px; font-weight:800; }
    .job-form section { margin-top:30px; }
    .job-form section > h3 { display:flex; align-items:center; gap:10px; font-size:19px; margin:0 0 5px; }
    .number { display:inline-flex; width:25px; height:25px; align-items:center; justify-content:center; background:var(--accent); color:#fff; border-radius:50%; font-size:13px; }
    .question { padding:15px 0; border-top:1px solid var(--line); }
    .question:first-of-type { border-top:0; }
    .question__title { margin:0 0 8px; font-size:15px; font-weight:800; }
    .grid2,.grid3 { display:grid; gap:12px; }
    .grid2 { grid-template-columns:repeat(2,minmax(0,1fr)); }
    .grid3 { grid-template-columns:repeat(3,minmax(0,1fr)); }
    label.field-label { display:block; color:var(--muted); font-size:12px; font-weight:700; margin-bottom:4px; }
    input[type="text"],textarea { width:100%; border:1px solid var(--line); border-radius:5px; padding:9px 10px; background:#fff; color:var(--ink); font:inherit; font-size:14px; }
    textarea { min-height:74px; resize:vertical; }
    input:focus,textarea:focus { outline:2px solid #d9b8ad; border-color:var(--accent); }
    .choices { display:flex; flex-wrap:wrap; gap:7px 16px; font-size:14px; }
    .choices label { display:flex; align-items:center; gap:5px; cursor:pointer; }
    .actions { display:flex; align-items:center; gap:10px; margin-top:28px; }
    .status { color:var(--success); font-size:13px; margin-right:auto; }
    footer { margin-top:30px; padding-top:12px; border-top:1px solid var(--line); }
    .watch-note { display:none; margin:0 0 18px; padding:10px 13px; background:#edf7ef; border-left:4px solid var(--success); color:#245534; font-size:13px; }
    body.is-watch .watch-note { display:block; }
    body.is-watch .add-job,body.is-watch .watch-link { display:none; }
    @media(max-width:680px) { .job-sheet { margin:0; padding:28px 20px 42px; } .job-sheet h1 { font-size:25px; } .grid2,.grid3 { grid-template-columns:1fr; } .job-picker__top { align-items:flex-start; flex-direction:column; } .job-cards { margin:0 -4px; } .job-card { flex-basis:165px; min-height:92px; } .actions { align-items:stretch; flex-direction:column; } .status { margin-right:0; } }
  </style>
</head>
<body <?php body_class('toraji-job-sheet'); ?>>
<?php wp_body_open(); ?>
<main class="job-sheet" id="toraji-job-sheets">
  <header class="job-sheet__header">
    <h1>トラジ様｜職種別求人ヒアリングシート</h1>
    <p class="lead">職種ごとの求人原稿に必要な条件を確認するシートです。必要な職種を追加し、それぞれ入力してください。</p>
  </header>
  <p class="watch-note">この画面は確認用です。入力内容はリアルタイムで更新されます。</p>
  <aside class="guide"><strong>使い方：</strong>上部の職種カードを選ぶと、その職種専用の入力欄が開きます。ホール・キッチン・正社員の3職種をあらかじめ用意しています。必要な職種は「職種を追加」から増やせます。入力内容は端末・サーバー・Firebaseへ自動保存されます。</aside>

  <section class="job-picker" aria-label="職種の選択">
    <div class="job-picker__top"><div><h2>入力する職種を選択</h2><p>職種ごとに別の入力内容を保存します。</p></div><button type="button" class="add-job">＋ 職種を追加</button></div>
    <div class="job-cards" id="job-cards"></div>
  </section>

  <form class="job-form" id="job-form">
    <input type="hidden" id="job-autosave-nonce" value="<?php echo esc_attr(wp_create_nonce('toraji_hearing_autosave')); ?>">
    <div class="sheet-title"><h2 id="active-job-title"></h2><span class="badge" id="active-job-badge">職種別シート</span></div>
    <p class="section-note">この職種にだけ当てはまる条件をご入力ください。未確定の場合は「未定」「確認中」と記載してください。</p>

    <section><h3><span class="number">1</span>人数・入社時期</h3><p class="section-note">オープン前採用のため、勤務開始・研修時期も確認します。</p>
      <div class="question"><p class="question__title">募集人数（雇用形態別）</p><div class="grid3"><div><label class="field-label">アルバイト・パート</label><input type="text" data-field="part_time" placeholder="例：25名"></div><div><label class="field-label">正社員</label><input type="text" data-field="full_time" placeholder="例：未定／0名"></div><div><label class="field-label">契約社員・その他</label><input type="text" data-field="other_count" placeholder="例：なし"></div></div></div>
      <div class="question"><p class="question__title">勤務開始の時期</p><input type="text" data-field="start_date" placeholder="例：4月中旬からオープン前研修に参加／即日〜相談可"></div>
      <div class="question"><p class="question__title">オープン前研修の予定（期間・場所・研修中の時給）</p><textarea data-field="training" placeholder="例：オープン前2〜3週間、天神店で実施、時給は通常と同額"></textarea></div>
    </section>

    <section><h3><span class="number">2</span>仕事内容・教育</h3><p class="section-note">未経験者にも仕事内容や成長イメージが伝わるように整理します。</p>
      <div class="question"><p class="question__title">主な仕事内容</p><textarea data-field="work_description" placeholder="例：ご案内・オーダー・配膳・仕込み・盛り付けなど"></textarea></div>
      <div class="question"><p class="question__title">最初に任せる仕事／慣れてから任せる仕事</p><div class="grid2"><div><label class="field-label">最初（入店〜1ヶ月目安）</label><textarea data-field="first_work"></textarea></div><div><label class="field-label">慣れてから</label><textarea data-field="later_work"></textarea></div></div></div>
      <div class="question"><p class="question__title">未経験者への教育体制</p><textarea data-field="education" placeholder="例：先輩スタッフがトレーナーとして付く／勉強会あり"></textarea></div>
    </section>

    <section><h3><span class="number">3</span>給与・手当</h3><p class="section-note">この職種で求人原稿に掲載する給与条件を確定します。</p>
      <div class="question"><p class="question__title">基本給与</p><div class="grid2"><div><label class="field-label">アルバイト・パート（時給）</label><input type="text" data-field="hourly_pay" placeholder="例：時給1,200円〜"></div><div><label class="field-label">正社員（月給）</label><input type="text" data-field="monthly_pay" placeholder="例：月給○万円〜／未定"></div></div></div>
      <div class="question"><p class="question__title">加算・手当・昇給・交通費</p><textarea data-field="allowances" placeholder="例：深夜25%UP、土日祝+50円、交通費月上限○円、昇給年2回"></textarea></div>
    </section>

    <section><h3><span class="number">4</span>勤務条件・シフト</h3><p class="section-note">働きやすさとして伝えられる条件を確認します。</p>
      <div class="question"><p class="question__title">営業時間・募集する勤務時間帯</p><textarea data-field="working_hours" placeholder="例：17:00〜24:00／16:00〜翌1:00の間で4時間〜"></textarea></div>
      <div class="question"><p class="question__title">最低シフト条件</p><textarea data-field="minimum_shift" placeholder="例：週2日〜、1日4時間〜、シフトは2週間ごと"></textarea></div>
      <div class="question"><p class="question__title">柔軟に対応できること</p><div class="choices" data-check-group="flexibility"><label><input type="checkbox" value="テスト期間の考慮">テスト期間の考慮</label><label><input type="checkbox" value="終電考慮">終電考慮</label><label><input type="checkbox" value="週末のみ可">週末のみ可</label><label><input type="checkbox" value="平日のみ可">平日のみ可</label><label><input type="checkbox" value="短時間勤務可">短時間勤務可</label><label><input type="checkbox" value="掛け持ち可">掛け持ち可</label></div></div>
    </section>

    <section><h3><span class="number">5</span>待遇・福利厚生</h3><p class="section-note">職種ごとに適用される待遇と条件を確認します。</p>
      <div class="question"><p class="question__title">適用される待遇</p><div class="choices" data-check-group="benefits"><label><input type="checkbox" value="まかない">まかない</label><label><input type="checkbox" value="交通費">交通費</label><label><input type="checkbox" value="制服貸与">制服貸与</label><label><input type="checkbox" value="社会保険">社会保険</label><label><input type="checkbox" value="社員登用制度">社員登用制度</label><label><input type="checkbox" value="食事割引">食事割引</label><label><input type="checkbox" value="オープニング特典">オープニング特典</label></div><input type="text" data-field="benefit_notes" placeholder="適用条件・補足（例：社会保険は週20時間以上）"></div>
    </section>

    <section><h3><span class="number">6</span>応募条件・選考の流れ</h3><p class="section-note">応募者が迷わないよう、条件と選考方法を具体的にします。</p>
      <div class="question"><p class="question__title">応募条件・歓迎条件</p><textarea data-field="requirements" placeholder="例：未経験歓迎／土日いずれか勤務できる方歓迎"></textarea></div>
      <div class="question"><p class="question__title">電話受付の体制</p><div class="grid3"><div><label class="field-label">電話番号（掲載用）</label><input type="text" data-field="phone"></div><div><label class="field-label">受付時間</label><input type="text" data-field="phone_hours"></div><div><label class="field-label">対応者</label><input type="text" data-field="contact_person"></div></div></div>
      <div class="question"><p class="question__title">面接の場所・方法／選考フロー</p><textarea data-field="selection_flow" placeholder="例：天神店にて対面／電話応募→面接日程調整→面接→3日以内に結果連絡"></textarea></div>
    </section>
    <div class="actions"><span class="status" id="job-save-status" aria-live="polite"></span><button type="button" class="secondary watch-link">確認用URLをコピー</button></div>
  </form>
  <footer>※入力内容はこの端末・サーバー・Firebaseへ自動保存され、確認用URLを開いた画面にもリアルタイムで反映されます。</footer>
</main>
<script>
(() => {
  const storageKey = 'toraji-kyushu-job-sheets-v1';
  const sessionStorageKey = `${storageKey}-session`;
  const form = document.getElementById('job-form');
  const cards = document.getElementById('job-cards');
  const title = document.getElementById('active-job-title');
  const status = document.getElementById('job-save-status');
  const params = new URLSearchParams(location.search);
  const watchMode = params.get('mode') === 'watch';
  const validSession = value => /^[a-zA-Z0-9-]{20,80}$/.test(value || '');
  let sessionId = validSession(params.get('session')) ? params.get('session') : localStorage.getItem(sessionStorageKey);
  if (!sessionId) { sessionId = crypto.randomUUID ? crypto.randomUUID() : `${Date.now()}-${Math.random().toString(36).slice(2)}`; localStorage.setItem(sessionStorageKey, sessionId); }
  const clientId = crypto.randomUUID ? crypto.randomUUID() : `${Date.now()}-${Math.random().toString(36).slice(2)}`;
  const defaults = [
    { id: 'hall', name: 'ホールスタッフ', note: '25名予定' },
    { id: 'kitchen', name: 'キッチンスタッフ', note: '4名予定' },
    { id: 'fulltime', name: '正社員・店長候補', note: '要否未定' },
  ];
  let state = { jobs: defaults.map(job => ({ ...job, data: {} })), activeJobId: 'hall' };
  let firebaseRef = null;
  let saveTimer;
  let applyingRemote = false;

  const activeJob = () => state.jobs.find(job => job.id === state.activeJobId) || state.jobs[0];
  const normalise = raw => raw && Array.isArray(raw.jobs) && raw.jobs.length ? raw : { jobs: defaults.map(job => ({ ...job, data: {} })), activeJobId: 'hall' };
  const fields = () => [...form.querySelectorAll('[data-field]')];
  const groups = () => [...form.querySelectorAll('[data-check-group]')];
  const completedCount = job => Object.values(job.data || {}).filter(value => Array.isArray(value) ? value.length : String(value || '').trim() !== '').length;
  const renderCards = () => { cards.innerHTML = ''; state.jobs.forEach(job => { const card = document.createElement('button'); card.type = 'button'; card.className = `job-card${job.id === state.activeJobId ? ' is-active' : ''}`; card.innerHTML = `<span class="job-card__title">${escapeHtml(job.name)}</span><span class="job-card__meta">${escapeHtml(job.note || '職種別シート')}</span><span class="job-card__count">${completedCount(job)}項目を入力済み</span>`; card.addEventListener('click', () => { state.activeJobId = job.id; render(); queueSave(); }); cards.appendChild(card); }); };
  const escapeHtml = value => String(value).replace(/[&<>'"]/g, char => ({ '&':'&amp;', '<':'&lt;', '>':'&gt;', "'":'&#039;', '"':'&quot;' }[char]));
  const renderForm = () => { const job = activeJob(); if (!job) return; title.textContent = job.name; fields().forEach(field => field.value = job.data[field.dataset.field] || ''); groups().forEach(group => { const selected = job.data[group.dataset.checkGroup] || []; group.querySelectorAll('input').forEach(input => input.checked = selected.includes(input.value)); }); };
  const render = () => { renderCards(); renderForm(); };
  const collect = () => { const job = activeJob(); if (!job) return; fields().forEach(field => { job.data[field.dataset.field] = field.value; }); groups().forEach(group => { job.data[group.dataset.checkGroup] = [...group.querySelectorAll('input:checked')].map(input => input.value); }); };
  const localSave = () => localStorage.setItem(storageKey, JSON.stringify(state));
  const saveWordPress = async () => { try { const body = new URLSearchParams({ action: 'toraji_hearing_autosave', nonce: document.getElementById('job-autosave-nonce').value, session_id: sessionId, data: JSON.stringify(state) }); await fetch('<?php echo esc_url(admin_url('admin-ajax.php')); ?>', { method: 'POST', headers: { 'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8' }, body }); } catch (error) { console.error('[WordPress] autosave failed:', error); } };
  const saveFirebase = async () => { if (!firebaseRef || watchMode || applyingRemote) return; try { await firebaseRef.set({ valuesJson: JSON.stringify(state), updatedAt: firebase.database.ServerValue.TIMESTAMP, updatedBy: clientId }); status.textContent = 'この端末・Firebaseに自動保存しました'; } catch (error) { console.error('[Firebase] autosave failed:', error); status.textContent = 'この端末に保存しました（Firebase同期を再試行します）'; } };
  const queueSave = () => { if (watchMode || applyingRemote) return; collect(); localSave(); renderCards(); status.textContent = '保存中…'; clearTimeout(saveTimer); saveTimer = setTimeout(() => { saveWordPress(); saveFirebase(); }, 900); };
  const applyRemote = raw => { try { state = normalise(JSON.parse(raw)); applyingRemote = true; render(); applyingRemote = false; } catch (error) { console.error('[Firebase] restore failed:', error); } };
  const initFirebase = async () => { const config = { apiKey: 'AIzaSyBD7gqJMZpeZq-ahKhn5n1dr6N0RMlnrmc', authDomain: 'sekailabo-form.firebaseapp.com', databaseURL: 'https://sekailabo-form-default-rtdb.asia-southeast1.firebasedatabase.app', projectId: 'sekailabo-form', storageBucket: 'sekailabo-form.firebasestorage.app', messagingSenderId: '827946492025', appId: '1:827946492025:web:214529988fd27e4be1f4a8' }; try { if (!firebase.apps.length) firebase.initializeApp(config); await firebase.auth().signInAnonymously(); firebaseRef = firebase.database().ref(`forms/toraji-kyushu-job-sheets/${sessionId}`); const initial = await firebaseRef.once('value'); if (initial.exists() && initial.val().valuesJson) applyRemote(initial.val().valuesJson); firebaseRef.on('value', snapshot => { const data = snapshot.val(); if (!data || !data.valuesJson || data.updatedBy === clientId) return; applyRemote(data.valuesJson); status.textContent = 'Firebaseから更新を反映しました'; }); if (!initial.exists() && !watchMode) saveFirebase(); if (watchMode) { document.body.classList.add('is-watch'); form.querySelectorAll('input,textarea,button').forEach(element => { if (!element.classList.contains('watch-link')) element.disabled = true; }); status.textContent = 'リアルタイム確認中'; } } catch (error) { console.error('[Firebase] initialization failed:', error); status.textContent = 'この端末・サーバーに保存中（Firebase接続を確認中）'; } };
  document.querySelector('.add-job').addEventListener('click', () => { const name = prompt('追加する職種名を入力してください（例：ソムリエ、清掃スタッフ）'); if (!name || !name.trim()) return; const id = `job-${Date.now()}`; state.jobs.push({ id, name: name.trim(), note: '追加した職種', data: {} }); state.activeJobId = id; render(); queueSave(); });
  fields().forEach(field => { field.addEventListener('input', queueSave); field.addEventListener('change', queueSave); });
  groups().forEach(group => group.addEventListener('change', queueSave));
  form.addEventListener('submit', event => event.preventDefault());
  document.querySelector('.watch-link').addEventListener('click', async () => { const url = `${location.origin}${location.pathname}?session=${encodeURIComponent(sessionId)}&mode=watch`; try { await navigator.clipboard.writeText(url); status.textContent = '確認用URLをコピーしました'; } catch (error) { prompt('確認用URLをコピーしてください', url); } });
  if (!watchMode) { try { state = normalise(JSON.parse(localStorage.getItem(storageKey) || 'null')); } catch (error) {} }
  render(); initFirebase();
})();
</script>
<?php wp_footer(); ?>
</body>
</html>
