const engToIdSex = engSex => engSex === "MALE" ? "Laki - Laki" : "Perempuan";

const engToIdDate = engDate => {
    return `${engDate.split('-')[2]}-${engDate.split('-')[1]}-${engDate.split('-')[0]}`
}