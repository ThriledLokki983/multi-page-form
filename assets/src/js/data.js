/** @format */
export const watches = [
    {
        id: 1,
        name: "20044ZA-T",
        prijs: "12,800",
        desc: [
            {
                func: "Uren, minuten, secondes, datum, 12uurs tweede tijdzone met AM/PM-aanduiding, chronograaf (minuten, secondes)",
                uurwrk: "ETA 7751 in eigen manufactuur omgebouwd naar een ETA 7753, 29 jewels, tikgetal 28.800, 48 uur gangreserve, eigen ontwikkelde complicaties: 12uurs tweede tijdzone met AM/PM-aanduiding. Instelbaar op een half uur, te gebruiken als tweede tijd of Greenwich / Zulu-tijdsaanduiding, grote datum op 6 uur",
            },
        ],
    },
    {
        id: 2,
        name: "20044BA-T",
        prijs: "15,560",
        desc: [
            {
                func: "Uren, minuten, secondes, datum, 12uurs tweede tijdzone met AM/PM-aanduiding, chronograaf (minuten, secondes)",
                uurwrk: "ETA 7751 in eigen manufactuur omgebouwd naar een ETA 7753, 29 jewels, tikgetal 28.800, 48 uur gangreserve, eigen ontwikkelde complicaties: 12uurs tweede tijdzone met AM/PM-aanduiding. Instelbaar op een half uur, te gebruiken als tweede tijd of Greenwich / Zulu-tijdsaanduiding, grote datum op 6 uur",
            },
        ],
    },
    {
        id: 3,
        name: "20044BW-G",
        prijs: "11,000",
        desc: [
            {
                func: "Uren, minuten, secondes, datum, 12uurs tweede tijdzone met AM/PM-aanduiding, chronograaf (minuten, secondes)",
                uurwrk: "ETA 7751 in eigen manufactuur omgebouwd naar een ETA 7753, 29 jewels, tikgetal 28.800, 48 uur gangreserve, eigen ontwikkelde complicaties: 12uurs tweede tijdzone met AM/PM-aanduiding. Instelbaar op een half uur, te gebruiken als tweede tijd of Greenwich / Zulu-tijdsaanduiding, grote datum op 6 uur",
            },
        ],
    },
    {
        id: 4,
        name: "20044BA-G",
        prijs: "12,800",
        desc: [
            {
                func: "Uren, minuten, secondes, datum, 12uurs tweede tijdzone met AM/PM-aanduiding, chronograaf (minuten, secondes)",
                uurwrk: "ETA 7751 in eigen manufactuur omgebouwd naar een ETA 7753, 29 jewels, tikgetal 28.800, 48 uur gangreserve, eigen ontwikkelde complicaties: 12uurs tweede tijdzone met AM/PM-aanduiding. Instelbaar op een half uur, te gebruiken als tweede tijd of Greenwich / Zulu-tijdsaanduiding, grote datum op 6 uur",
            },
        ],
    },
];

export const customers = [
    {
        voornaam: "Gideon",
        tussenvoegsel: "",
        achternaam: "Nimoh",
        adres: "",
        postcode: "",
        plaats: "",
        land: "",
        email: "",
        tel: "",
        opmerk: "",
    },
    {
        voornaam: "",
        tussenvoegsel: "",
        achternaam: "",
        adres: "",
        postcode: "",
        plaats: "",
        land: "",
        email: "",
        tel: "",
        opmerk: "",
    },
];

export const countries = [];

const getJSON = function (url, errMsg = "Something went wrong") {
    return fetch(url).then((response) => {
        if (!response.ok) throw new Error(`${errMsg}, (${response.status})`);
        return response.json();
    });
};

/**
 * IIFE - cos I will be calling once
 * Accepts no parameter - all it does is get all available data based on the inner function called
 */
(() => {
    getJSON(`https://restcountries.eu/rest/v2/all`).then((result) =>
        result.map((country) => countries.push(country))
    );
})();
