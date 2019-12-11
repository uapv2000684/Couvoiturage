<?php
// Inclusion de la classe reservation
require_once "reservation.class.php";

class reservationTable {
	public static function getReservationsByVoyage($voyage)
	{
		$em = dbconnection::getInstance()->getEntityManager();
		if($em == null)
			return 'Erreur : La connection à la BDD a échouée';

		$reservationRepository = $em->getRepository('reservation');
		if($reservationRepository == null)
			return "Erreur : La table 'reservation' n'existe pas";

		$reservations = $reservationRepository->findBy(array('voyage' => $voyage));	

		return $reservations;
	}
}
?>
