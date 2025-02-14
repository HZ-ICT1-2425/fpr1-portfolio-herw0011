<x-layouts.layout>

<body>
<main>
    <h1>Dashboard</h1>

    <style>
        table,
        th,
        td {
            border: 1px solid #7a89ffba;
        }
    </style>

    <table style="width:100%">
        <tr>
            <th>Quartile</th>
            <th>Courses</th>
            <th>Exams</th>
            <th>EC</th>
            <th>Marks</th>
        </tr>

        <tr>
            <td>1</td>
            <td>
                <ul>
                    <li>PCO</li>
                    <li>CSB</li>
                    <li>PBA</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li> PCO: Assessment</li>
                    <li> CSB: Written Exam</li>
                    <li> PBA: Case Study Exam</li>
                </ul>
            </td>

            <td>
                <ul>
                    <li>2,5</li>
                    <li>5,0</li>
                    <li>5,0</li>
                </ul>
            </td>

            <td>
                <ul>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                </ul>
            </td>

        </tr>

        <tr>
            <td>2</td>
            <td>
                <ul>
                    <li>PPD-E</li>
                    <li>OOP</li>
                </ul>
            </td>

            <td>
                <ul>
                    <li> PPD-E: Interview </li>
                    <li> OOP: Group Assessment</li>
                    <li> OOP: Case study exam</li>
                </ul>
            </td>

            <td>
                <ul>
                    <li>12,5</li>
                    <li>10</li>
                </ul>
            </td>

            <td>
                <ul>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                </ul>
            </td>
        </tr>

        <tr>
            <td>3</td>
            <td>
                <ul>
                    <li>Framework project 1</li>
                    <li>Business IT Consultency Basics</li>
                </ul>
            </td>

            <td>
                <ul>
                    <li>FWP1: Case study exam</li>
                    <li>FWP1: Database exam</li>
                    <li>FWP1: Group presentation</li>
                    <li>FWP1: Group portfolio</li>
                </ul>
            </td>

            <td>
                <ul>
                    <li>10</li>
                    <li>-</li>
                </ul>
            </td>

            <td>
                <ul>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                </ul>
            </td>
        </tr>

        <tr>
            <td>4</td>
            <td>
                <ul>
                    <li>Framework project 2</li>
                    <li>Business IT Consultency Basics</li>
                </ul>
            </td>

            <td>
                <ul>
                    <li>FWP2: Final Delivery</li>
                    <li>FWP2: Report</li>
                    <li>FWP2: Portfolio</li>
                    <li>ITC: Video</li>
                </ul>
            </td>

            <td>
                <ul>
                    <li>10</li>
                    <li>2,5</li>
                </ul>
            </td>

            <td>
                <ul>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                </ul>
            </td>
        </tr>

        <tr>
            <td>Other</td>

            <td>
                <ul>
                    <li>Personality</li>
                </ul>
            </td>

            <td>
                <ul>
                    <li>Personal choice</li>
                </ul>
            </td>

            <td>
                <ul>
                    <li>2,5</li>
                </ul>
            </td>

            <td>
                <ul>
                    <li>...</li>
                </ul>
            </td>
        </tr>

    </table>

    <p class="EC"> EC'S: 0/60 <br> </p>
    <p class="progressBarP"> DANGER: BELOW THE NBSA THRESHOLD (45 EC'S)</p>

    <table>
        <tr>
            <th class="progressBar"></th>
            <th class="progressBar"></th>
            <th class="progressBar"></th>
            <th class="progressBar"></th>
            <th class="progressBar"></th>
            <th class="progressBar"></th>
        </tr>
    </table>

</main>
</body>

</html>
    </x-layouts.layout>
