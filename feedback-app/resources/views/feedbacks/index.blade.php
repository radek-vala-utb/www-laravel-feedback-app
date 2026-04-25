<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seznam zpětných vazeb</title>
    <style>
        :root {
            --bg-start: #f7fafc;
            --bg-end: #e6eef8;
            --card-bg: #ffffff;
            --text: #1b2a41;
            --muted: #5f6c7b;
            --border: #d6deea;
            --header: #edf3fb;
            --accent: #f59e0b;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text);
            background: linear-gradient(140deg, var(--bg-start), var(--bg-end));
            padding: 2rem 1rem;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 14px;
            box-shadow: 0 20px 40px -25px rgba(27, 42, 65, 0.35);
            overflow: hidden;
        }

        .header {
            padding: 1.25rem 1.5rem;
            border-bottom: 1px solid var(--border);
            background: var(--header);
        }

        .title {
            margin: 0;
            font-size: 1.4rem;
            letter-spacing: 0.02em;
        }

        .subtitle {
            margin: 0.35rem 0 0;
            color: var(--muted);
            font-size: 0.95rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 0.95rem 1.2rem;
            text-align: left;
            border-bottom: 1px solid var(--border);
        }

        th {
            font-size: 0.84rem;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: var(--muted);
            background: #fbfdff;
        }

        tr:last-child td {
            border-bottom: 0;
        }

        tr:hover td {
            background: #f8fbff;
        }

        .rating {
            color: var(--accent);
            letter-spacing: 0.08em;
            font-size: 1.05rem;
            white-space: nowrap;
        }

        .empty {
            padding: 1.6rem 1.2rem;
            color: var(--muted);
        }

        @media (max-width: 640px) {
            body {
                padding: 1rem 0.5rem;
            }

            th,
            td {
                padding: 0.8rem 0.8rem;
            }

            .title {
                font-size: 1.15rem;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <header class="header">
        <h1 class="title">Přehled zpětných vazeb</h1>
        <p class="subtitle">Datum přidání a hodnocení kategorie hodnoty přednášek</p>
    </header>

    @if ($feedbacks->isEmpty())
        <p class="empty">Zatím nejsou k dispozici žádné záznamy.</p>
    @else
        <table>
            <thead>
            <tr>
                <th>Datum přidání</th>
                <th>Počet bodů</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($feedbacks as $feedback)
                <tr>
                    <td>{{ $feedback->created_at?->format('d.m.Y H:i') }}</td>
                    <td class="rating">{{ str_repeat('★', (int) $feedback->lectures_value_rating) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
</body>
</html>
