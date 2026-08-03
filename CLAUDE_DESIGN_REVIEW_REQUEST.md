# Claude Design Review Request — SEKAILABO' Corporate Site

## Objective
Review the current SEKAILABO' corporate-site theme and propose an actionable redesign direction. **Do not edit files in this review.** Write the findings to `CLAUDE_DESIGN_REVIEW.md` in this repository.

## User-reported problems
- Graphic backgrounds and textual information feel visually cluttered and disorganized.
- The hero background is portrait video, so it feels stretched/slow and loses quality when used as a full-screen background.
- The goal is a premium, coherent corporate-site experience that reflects SEKAILABO' rather than a decorative but hard-to-read presentation.

## Project / brand context
- SEKAILABO' is the user's sole-proprietorship trade name; MOGS is an activity within SEKAILABO'.
- Current positioning source: `front-page.php`.
- Core message: 「感情を編み、体験をデザインする。」
- Brand tone should retain human warmth, local/on-the-ground credibility, visual/narrative impact, and community energy. Technology is a means, not the objective.
- The present homepage uses a newly optimized portrait MP4 (`bg_mv.mp4`) managed through Git LFS.

## Files to inspect
- `front-page.php`
- `css/front-page.css`
- `css/basic.css`
- `css/sp.css`
- `js/ui.js`
- `header.php`
- current site assets under `img/`

## Required review output
1. Diagnose the concrete causes of clutter, hierarchy problems, readability problems, and the portrait-video mismatch. Cite the relevant file/selector/section.
2. Propose a clear art-direction concept in Japanese, including visual hierarchy, typography, color, whitespace, motion, and image/video rules.
3. Propose a hero strategy that works with the portrait video without stretching or lowering perceived quality. Compare at least two implementation approaches (for example: cropped ambient background plus foreground media; a static art-directed hero with video lower on the page).
4. Recommend a homepage information architecture and section-by-section content hierarchy.
5. Give a prioritized implementation plan split into:
   - Quick wins
   - Core redesign
   - Optional polish
6. Include implementation notes for responsive behavior, accessibility/reduced motion, loading performance, and WordPress maintainability.
7. State which existing assets/content should be retained, replaced, or treated as placeholder/legacy.

## Constraints
- Keep the scope proposal-oriented; do not modify source code.
- Do not reuse legacy company/recruitment details without explicit user confirmation.
- Do not disclose or alter deployment credentials, analytics identifiers, or other sensitive data.
