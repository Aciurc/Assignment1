<div class="row">
    <div class="col-md-4">
        <table class="table">
            <tr>
                <th>Player</th>
                <th>Cash</th>
            </tr>
            {players}
            <tr>
                <td>{Player}</td>
                <td>{Cash}</td>
            </tr>
            {/players}
        </table>
    </div>
    <div class="col-md-4">
        <table class="table">
            <tr>
                <th>Stock</th>
                <th>Value</th>
                <th>Link</th>
            </tr>
            {stocks}
            <tr>
                <td>{Name}</td>
                <td>{Value}</td>
                <td><a href="#">Stock History</a></td>
            </tr>
            {/stocks}
        </table>
    </div>
</div>