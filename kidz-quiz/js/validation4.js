// Copyright (C) 2022 oppdev2021
// 
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
// 
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
// 
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.

function doWork(ev) {
    let checkboxes = document.querySelectorAll("input[type=checkbox]:checked");

    if (checkboxes.length !== 1) {
        document.getElementById("bugger").innerText = "Choose exactly one!"
        ev.preventDefault();
    }

    if (checkboxes[0].id === "cb2") {
        document.getElementById("tally").value = 1;
    }
}

document.getElementById("aForm").addEventListener("submit", doWork);