package birt.dwes.apirest.dao;

import java.util.List;

import org.springframework.stereotype.Repository;
import birt.dwes.apirest.entity.Trail;
import jakarta.persistence.EntityManager;
import jakarta.persistence.PersistenceContext;
import jakarta.persistence.TypedQuery;
import jakarta.transaction.Transactional;


@Repository
public class TrailDAOImpl implements TrailDAO {

	@PersistenceContext
	private EntityManager entityManager;
	
	@Override
	@Transactional
	public List<Trail> findAll() {
		TypedQuery<Trail> theQuery = entityManager.createQuery("from Trail", Trail.class);
		List<Trail> deport = theQuery.getResultList();
		return deport;
	}
}