# Mango Engineers — Agent Rules

Repository truth is authoritative. Before work, read:
- docs/agent-start-here.md
- docs/task-board.csv
- docs/work-log.md
- docs/integration-queue.md
- latest main and recent commits

## Core rules
1. Preserve the current Mango Engineers theme and working URLs.
2. Do not invent business claims, placements, clients, reviews, awards, statistics, certifications, people or industrial services.
3. Reuse shared PHP components; do not rewrite shared header/footer/forms/CSS from worker branches unless the task explicitly owns that shared scope.
4. Claim a small task before editing. Avoid files owned by another active task.
5. Route shared changes through docs/integration-queue.md.
6. Keep public .html URLs stable unless an approved migration/redirect plan says otherwise.
7. No task is DONE until implementation is verified. Push != deployed; merge != live.
8. Workers must record meaningful completed work in docs/work-log.md.
9. Do not merge diverged historical branches wholesale. Compare against current main and preserve only still-valid deltas.
10. Protect lead data: never commit submitted personal data to GitHub or public logs.

The master coordinator owns merge sequencing, conflict resolution, shared components, sitemap/robots, navigation, redirects, global schema and final integration.
