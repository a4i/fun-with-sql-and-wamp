fetch('./userdata.php')
        .then(
            (r) => {
                r.json().then(
                    j => {
                        document.querySelector("#txt").appendChild(document.createTextNode(j.login))
                        document.querySelector("#txt").appendChild(document.createTextNode(j.pw))
                        document.querySelector("#txt").appendChild(document.createTextNode(j.x))
                        document.querySelector("#txt").appendChild(document.createTextNode(j.y))
                    }
                )
            }
        )
