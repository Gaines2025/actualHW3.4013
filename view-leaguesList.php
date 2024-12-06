<select class="form-select" id="lid" name="lid">
<?php
while ($leagueNames = selectLeaguesFromInput->fetch_assoc()) {
?>
    <option value="<?php echo $leagueNames['league_id']; ?>"><?php echo $leagueNames['league_name']; ?></option>
<?php
}
?>

</select>
